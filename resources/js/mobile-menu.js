document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.getElementById('mobile-menu-toggle');
  var menu = document.getElementById('mobile-menu');
  var closeBtn = document.getElementById('mobile-menu-close');
  var overlay = document.getElementById('mobile-menu-overlay');

  if (!toggle || !menu) return;

  function lockScroll() {
    document.documentElement.style.overflow = 'hidden';
    document.body.style.overflow = 'hidden';
  }

  function unlockScroll() {
    document.documentElement.style.overflow = '';
    document.body.style.overflow = '';
  }

  function openMenu() {
    menu.classList.remove('hidden');
    toggle.setAttribute('aria-expanded', 'true');
    lockScroll();
  }

  function closeMenu() {
    menu.classList.add('hidden');
    toggle.setAttribute('aria-expanded', 'false');
    unlockScroll();
  }

  toggle.addEventListener('click', function (e) {
    e.preventDefault();
    if (menu.classList.contains('hidden')) {
      openMenu();
    } else {
      closeMenu();
    }
  });

  if (closeBtn) {
    closeBtn.addEventListener('click', function (e) {
      e.preventDefault();
      closeMenu();
    });
  }

  if (overlay) {
    overlay.addEventListener('click', function () {
      closeMenu();
    });
  }

  // Close on Escape
  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') {
      closeMenu();
    }
  });

  // Close when clicking an internal link
  menu.addEventListener('click', function (e) {
    var target = e.target;
    while (target && target !== menu) {
      if (target.tagName === 'A') {
        closeMenu();
        return;
      }
      target = target.parentNode;
    }
  });

  // Submenu toggle (collapsible sections like Księgowość)
  var submenuToggles = menu.querySelectorAll('.mobile-submenu-toggle');
  submenuToggles.forEach(function (btn) {
    var targetId = btn.getAttribute('data-target');
    var submenu = document.getElementById(targetId);
    var arrow = btn.querySelector('svg');

    btn.addEventListener('click', function (e) {
      e.preventDefault();
      var isOpen = btn.getAttribute('aria-expanded') === 'true';
      if (submenu) {
        submenu.classList.toggle('hidden');
      }
      btn.setAttribute('aria-expanded', isOpen ? 'false' : 'true');
      if (arrow) {
        // simple rotation
        arrow.style.transform = isOpen ? '' : 'rotate(180deg)';
      }
    });
  });

  // When closing main menu, collapse any open submenus
  var collapseSubmenus = function () {
    submenuToggles.forEach(function (btn) {
      var targetId = btn.getAttribute('data-target');
      var submenu = document.getElementById(targetId);
      var arrow = btn.querySelector('svg');
      if (submenu && !submenu.classList.contains('hidden')) {
        submenu.classList.add('hidden');
      }
      btn.setAttribute('aria-expanded', 'false');
      if (arrow) arrow.style.transform = '';
    });
  };

  var origCloseMenu = closeMenu;
  closeMenu = function () {
    collapseSubmenus();
    origCloseMenu();
  };
});
