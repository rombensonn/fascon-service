(() => {
  const body = document.body;
  const menuToggle = document.querySelector('[data-menu-toggle]');
  const nav = document.querySelector('[data-nav]');
  const header = document.querySelector('[data-header]');
  const form = document.querySelector('[data-lead-form]');
  const pageField = document.querySelector('[data-page-field]');

  if (pageField) {
    pageField.value = window.location.href;
  }

  if (menuToggle && nav) {
    menuToggle.addEventListener('click', () => {
      const isOpen = body.classList.toggle('nav-open');
      menuToggle.setAttribute('aria-expanded', String(isOpen));
    });

    nav.addEventListener('click', (event) => {
      if (event.target.closest('a')) {
        body.classList.remove('nav-open');
        menuToggle.setAttribute('aria-expanded', 'false');
      }
    });

    document.addEventListener('keydown', (event) => {
      if (event.key === 'Escape') {
        body.classList.remove('nav-open');
        menuToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  if (header) {
    const syncHeader = () => {
      header.classList.toggle('is-scrolled', window.scrollY > 8);
    };

    syncHeader();
    window.addEventListener('scroll', syncHeader, { passive: true });
  }

  const scrollToCurrentHash = () => {
    const hash = window.location.hash;
    if (!hash || hash.length < 2) {
      return;
    }

    const target = document.getElementById(hash.slice(1));
    if (target) {
      target.scrollIntoView({ block: 'start' });
    }
  };

  window.addEventListener('hashchange', () => {
    window.requestAnimationFrame(scrollToCurrentHash);
  });

  window.addEventListener('load', () => {
    window.setTimeout(scrollToCurrentHash, 80);
  });

  const revealItems = document.querySelectorAll('.reveal');
  if ('IntersectionObserver' in window && revealItems.length) {
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    revealItems.forEach((item) => observer.observe(item));
  } else {
    revealItems.forEach((item) => item.classList.add('is-visible'));
  }

  if (!form) {
    return;
  }

  const status = form.querySelector('[data-form-status]');
  const submitButton = form.querySelector('[data-submit-button]');

  const setStatus = (message, type) => {
    if (!status) {
      return;
    }

    status.textContent = message;
    status.classList.remove('is-success', 'is-error');

    if (type) {
      status.classList.add(`is-${type}`);
    }
  };

  const setPending = (isPending) => {
    if (!submitButton) {
      return;
    }

    submitButton.disabled = isPending;
    submitButton.textContent = isPending ? 'Отправляем...' : 'Отправить заявку';
  };

  const focusFirstInvalid = () => {
    const invalidField = form.querySelector(':invalid');
    if (invalidField) {
      invalidField.focus({ preventScroll: false });
    }
  };

  form.addEventListener('submit', async (event) => {
    event.preventDefault();
    setStatus('', '');

    if (!form.checkValidity()) {
      form.reportValidity();
      focusFirstInvalid();
      return;
    }

    setPending(true);

    try {
      const response = await fetch(form.action, {
        method: 'POST',
        headers: {
          'Accept': 'application/json'
        },
        body: new FormData(form)
      });

      const data = await response.json().catch(() => ({
        success: false,
        message: 'Не удалось прочитать ответ сервера. Попробуйте позвонить в приемку.'
      }));

      if (!response.ok || !data.success) {
        setStatus(data.message || 'Заявку не удалось отправить. Проверьте поля или позвоните в приемку.', 'error');
        return;
      }

      form.reset();
      if (pageField) {
        pageField.value = window.location.href;
      }
      const callOption = form.querySelector('input[name="contact_method"][value="Звонок"]');
      if (callOption) {
        callOption.checked = true;
      }
      setStatus(data.message || 'Заявка отправлена. Специалист Фаскон Сервис свяжется с вами.', 'success');
    } catch (error) {
      setStatus('Не получилось отправить заявку. Позвоните в приемку или попробуйте еще раз.', 'error');
    } finally {
      setPending(false);
    }
  });
})();
