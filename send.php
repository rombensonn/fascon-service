<?php
declare(strict_types=1);

ini_set('display_errors', '0');
ini_set('log_errors', '1');
error_reporting(E_ALL);

header('Content-Type: application/json; charset=utf-8');

$configPath = __DIR__ . '/config.php';
$config = is_file($configPath) ? require $configPath : [];

$leadsDir = __DIR__ . '/leads';
if (!is_dir($leadsDir)) {
    mkdir($leadsDir, 0750, true);
}
ini_set('error_log', $leadsDir . '/php_errors.log');

function respond(bool $success, string $message, int $statusCode = 200): never
{
    http_response_code($statusCode);
    echo json_encode([
        'success' => $success,
        'message' => $message,
    ], JSON_UNESCAPED_UNICODE);
    exit;
}

function raw_field(string $key): string
{
    return trim((string)($_POST[$key] ?? ''));
}

function clean_field(string $value): string
{
    return htmlspecialchars(trim($value), ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
}

function has_checked(string $key): bool
{
    return isset($_POST[$key]) && (string)$_POST[$key] === '1';
}

function normalize_for_csv(string $value): string
{
    $value = str_replace(["\r\n", "\r"], "\n", $value);
    $first = utf8_substr(ltrim($value), 0, 1);

    if (in_array($first, ['=', '+', '-', '@'], true)) {
        return "'" . $value;
    }

    return $value;
}

function encode_subject(string $subject): string
{
    return '=?UTF-8?B?' . base64_encode($subject) . '?=';
}

function utf8_length(string $value): int
{
    return function_exists('mb_strlen') ? mb_strlen($value, 'UTF-8') : strlen($value);
}

function utf8_substr(string $value, int $start, int $length): string
{
    return function_exists('mb_substr') ? mb_substr($value, $start, $length, 'UTF-8') : substr($value, $start, $length);
}

function header_text(string $value): string
{
    return trim((string)preg_replace('/[\r\n]+/', ' ', html_entity_decode($value, ENT_QUOTES, 'UTF-8')));
}

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    respond(false, 'Метод запроса не поддерживается.', 405);
}

if (raw_field('website') !== '') {
    respond(true, 'Заявка отправлена. Специалист Фаскон Сервис свяжется с вами.');
}

$nameRaw = raw_field('name');
$phoneRaw = raw_field('phone');
$typeRaw = raw_field('request_type');
$carRaw = raw_field('car');
$messageRaw = raw_field('message');
$contactMethodRaw = raw_field('contact_method');
$pageRaw = raw_field('page');

$allowedTypes = [
    'Техцентр / приемка',
    'Шиномонтаж',
    'Запчасти / шины',
    'Диагностика',
    'Другое',
];

$allowedContactMethods = [
    'Звонок',
    'WhatsApp',
    'Telegram',
];

if (utf8_length($nameRaw) < 2 || utf8_length($nameRaw) > 80) {
    respond(false, 'Укажите имя от 2 до 80 символов.', 422);
}

if (!preg_match('/^[\p{L}\s\'`\.-]+$/u', $nameRaw)) {
    respond(false, 'Имя может содержать буквы, пробелы, дефис и точку.', 422);
}

$phoneDigits = preg_replace('/\D+/', '', $phoneRaw);
if (!preg_match('/^\+?[0-9\s()\-.]{10,24}$/', $phoneRaw) || strlen((string)$phoneDigits) < 10 || strlen((string)$phoneDigits) > 15) {
    respond(false, 'Укажите корректный номер телефона.', 422);
}

if (!in_array($typeRaw, $allowedTypes, true)) {
    respond(false, 'Выберите тип обращения.', 422);
}

if ($contactMethodRaw === '') {
    $contactMethodRaw = 'Звонок';
}

if (!in_array($contactMethodRaw, $allowedContactMethods, true)) {
    respond(false, 'Выберите корректный способ связи.', 422);
}

if (!has_checked('personal_consent')) {
    respond(false, 'Подтвердите согласие на обработку персональных данных.', 422);
}

if (!has_checked('policy_consent')) {
    respond(false, 'Подтвердите ознакомление с Политикой обработки персональных данных.', 422);
}

if (utf8_length($carRaw) > 120) {
    respond(false, 'Поле с маркой и моделью автомобиля слишком длинное.', 422);
}

if (utf8_length($messageRaw) > 1200) {
    respond(false, 'Описание проблемы слишком длинное.', 422);
}

$name = clean_field($nameRaw);
$phone = clean_field($phoneRaw);
$requestType = clean_field($typeRaw);
$car = clean_field($carRaw);
$message = clean_field($messageRaw);
$contactMethod = clean_field($contactMethodRaw);
$page = clean_field($pageRaw);
$ip = clean_field((string)($_SERVER['REMOTE_ADDR'] ?? ''));
$userAgent = clean_field((string)($_SERVER['HTTP_USER_AGENT'] ?? ''));
$date = (new DateTimeImmutable('now', new DateTimeZone('Europe/Moscow')))->format('Y-m-d H:i:s');

$lead = [
    'Дата и время' => $date,
    'Имя' => $name,
    'Телефон' => $phone,
    'Тип обращения' => $requestType,
    'Марка и модель авто' => $car !== '' ? $car : 'Не указано',
    'Описание проблемы' => $message !== '' ? $message : 'Не указано',
    'Удобный способ связи' => $contactMethod,
    'Страница отправки' => $page !== '' ? $page : 'Не указано',
    'IP-адрес' => $ip,
    'User-Agent' => $userAgent,
];

$csvPath = $leadsDir . '/leads.csv';
$isNewCsv = !is_file($csvPath);
$csvHandle = fopen($csvPath, 'ab');

if ($csvHandle === false) {
    error_log('Cannot open leads CSV for writing: ' . $csvPath);
    respond(false, 'Заявку не удалось сохранить. Позвоните в приемку.', 500);
}

if (!flock($csvHandle, LOCK_EX)) {
    fclose($csvHandle);
    error_log('Cannot lock leads CSV: ' . $csvPath);
    respond(false, 'Заявку не удалось сохранить. Позвоните в приемку.', 500);
}

if ($isNewCsv) {
    fputcsv($csvHandle, array_keys($lead), ';');
}

$csvRow = array_map('normalize_for_csv', array_values($lead));
$csvWritten = fputcsv($csvHandle, $csvRow, ';');
flock($csvHandle, LOCK_UN);
fclose($csvHandle);

if ($csvWritten === false) {
    error_log('Cannot write lead to CSV: ' . $csvPath);
    respond(false, 'Заявку не удалось сохранить. Позвоните в приемку.', 500);
}

$recipient = filter_var((string)($config['recipient_email'] ?? ''), FILTER_VALIDATE_EMAIL);
$fromEmail = filter_var((string)($config['from_email'] ?? ''), FILTER_VALIDATE_EMAIL) ?: 'no-reply@localhost';
$fromName = header_text(clean_field((string)($config['from_name'] ?? 'Фаскон Сервис')));

$emailLines = [];
foreach ($lead as $label => $value) {
    $emailLines[] = $label . ': ' . html_entity_decode($value, ENT_QUOTES, 'UTF-8');
}

$emailBody = implode("\n", $emailLines);
$emailSent = false;

if ($recipient !== false) {
    $headers = [
        'MIME-Version: 1.0',
        'Content-Type: text/plain; charset=UTF-8',
        'From: ' . encode_subject($fromName) . ' <' . $fromEmail . '>',
        'Reply-To: ' . $fromEmail,
        'X-Mailer: PHP/' . PHP_VERSION,
    ];

    $emailSent = mail(
        $recipient,
        encode_subject('Новая заявка с сайта Фаскон Сервис'),
        $emailBody,
        implode("\r\n", $headers)
    );
} else {
    error_log('Recipient email is not configured or invalid in config.php');
}

if (!$emailSent) {
    error_log('Lead was saved to CSV, but email was not sent. Check mail settings and recipient_email.');
}

respond(true, 'Заявка отправлена. Специалист Фаскон Сервис свяжется с вами.');
