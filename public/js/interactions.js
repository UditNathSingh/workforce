(function () {
  const root = document.documentElement;

  function applyTheme(theme) {
    const dark = theme === 'dark';
    root.classList.toggle('dark', dark);
    document.body.classList.toggle('dark', dark);
  }

  try {
    const savedTheme = localStorage.getItem('workforce-theme');
    if (savedTheme === 'dark' || savedTheme === 'light') {
      applyTheme(savedTheme);
    }
  } catch (error) {
    // Theme preferences are optional when storage is unavailable.
  }

  document.addEventListener('click', function (event) {
    const themeButton = event.target.closest('#theme-btn');
    if (!themeButton) return;

    event.preventDefault();
    event.stopPropagation();
    event.stopImmediatePropagation();

    const nextTheme = root.classList.contains('dark') ? 'light' : 'dark';
    applyTheme(nextTheme);
    try {
      localStorage.setItem('workforce-theme', nextTheme);
    } catch (error) {
      // Continue without persistence when storage is unavailable.
    }
  }, true);

  document.addEventListener('keydown', function (event) {
    if (event.key !== 'Escape') return;

    const modal = document.querySelector('#modal-root .modal-bg');
    if (modal && typeof window.closeModal === 'function') {
      window.closeModal();
      return;
    }

    document.querySelector('#role-menu')?.classList.add('hidden');
  });
})();
