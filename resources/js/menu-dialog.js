document.addEventListener('DOMContentLoaded', function () {
  const btn = document.getElementById('ksiegowosc-link');
  const panel = document.getElementById('ksiegowosc-panel');

  if (!btn || !panel) return;

  const closePanel = () => {
    panel.classList.add('hidden');
    btn.setAttribute('aria-expanded', 'false');
  };

  const openPanel = () => {
    panel.classList.remove('hidden');
    btn.setAttribute('aria-expanded', 'true');
  };

  btn.addEventListener('click', (e) => {
    e.preventDefault();
    if (panel.classList.contains('hidden')) openPanel();
    else closePanel();
  });
  document.addEventListener('click', (e) => {
    if (panel.classList.contains('hidden')) return;
    if (e.target === btn || btn.contains(e.target)) return;
    if (panel.contains(e.target)) return;
    closePanel();
  });

  document.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') closePanel();
  });

  // Add hover open/close behavior on hover-capable devices.
  try {
    const supportsHover =
      window.matchMedia && window.matchMedia('(hover: hover)').matches;

    if (supportsHover) {
      let hoverTimeout = null;

      const scheduleClose = (delay = 180) => {
        clearTimeout(hoverTimeout);
        hoverTimeout = setTimeout(() => closePanel(), delay);
      };

      btn.addEventListener('mouseenter', () => {
        clearTimeout(hoverTimeout);
        openPanel();
      });

      btn.addEventListener('mouseleave', () => {
        scheduleClose();
      });

      panel.addEventListener('mouseenter', () => {
        clearTimeout(hoverTimeout);
      });

      panel.addEventListener('mouseleave', () => {
        scheduleClose();
      });
    }
  } catch (err) {
    // ignore in old browsers
  }
  init();
});
