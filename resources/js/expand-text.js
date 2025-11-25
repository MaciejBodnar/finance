document.addEventListener('DOMContentLoaded', function () {
  document.querySelectorAll('[data-clamp-toggle]').forEach(function (btn) {
    btn.addEventListener('click', function () {
      var id = btn.getAttribute('data-clamp-toggle');
      var target = document.querySelector('[data-clamp-id="' + id + '"]');
      if (!target) return;
      var expanded = btn.getAttribute('aria-expanded') === 'true';
      if (expanded) {
        target.classList.add('line-clamp-8');
        btn.setAttribute('aria-expanded', 'false');
        btn.textContent = 'Pokaż więcej';
      } else {
        target.classList.remove('line-clamp-8');
        btn.setAttribute('aria-expanded', 'true');
        btn.textContent = 'Pokaż mniej';
      }
    });
  });
});
