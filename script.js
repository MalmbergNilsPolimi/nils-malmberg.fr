// ── Theme toggle ──
(function() {
  const root = document.documentElement;
  const savedTheme = sessionStorage.getItem('theme');
  const sysDark = window.matchMedia('(prefers-color-scheme: dark)').matches;
  let currentTheme = savedTheme || (sysDark ? 'dark' : 'light');
  root.setAttribute('data-theme', currentTheme);

  function applyThemeIcon(btn, theme) {
    if (!btn) return;
    btn.setAttribute('aria-label', theme === 'dark' ? 'Passer en mode clair' : 'Passer en mode sombre');
    btn.innerHTML = theme === 'dark'
      ? '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="5"/><path d="M12 1v2M12 21v2M4.22 4.22l1.42 1.42M18.36 18.36l1.42 1.42M1 12h2M21 12h2M4.22 19.78l1.42-1.42M18.36 5.64l1.42-1.42"/></svg>'
      : '<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>';
  }

  document.addEventListener('DOMContentLoaded', function() {
    const btn = document.querySelector('.theme-toggle');
    applyThemeIcon(btn, currentTheme);
    if (btn) {
      btn.addEventListener('click', function() {
        currentTheme = currentTheme === 'dark' ? 'light' : 'dark';
        root.setAttribute('data-theme', currentTheme);
        sessionStorage.setItem('theme', currentTheme);
        applyThemeIcon(btn, currentTheme);
      });
    }
  });
})();

// ── Language system ──
function changeLanguage(language) {
  document.documentElement.lang = language;

  const navHome = document.getElementById('nav-home');
  const navCv = document.getElementById('nav-cv');
  const navProjects = document.getElementById('nav-projects');
  if (navHome) navHome.textContent = language === 'fr' ? 'Accueil' : 'Home';
  if (navCv) navCv.textContent = language === 'fr' ? 'CV' : 'Resume';
  if (navProjects) navProjects.textContent = language === 'fr' ? 'Projets' : 'Projects';

  const flagImage = document.querySelector('.current-language img');
  if (flagImage) flagImage.src = `media/logo/logo_${language}.svg`;

  const langText = document.querySelector('.current-language .lang-label');
  if (langText) langText.textContent = language === 'fr' ? 'FR' : 'EN';

  const menu = document.getElementById('language-menu');
  if (menu) menu.style.display = 'none';

  const pathName = window.location.pathname;
  let currentPage = pathName.substring(pathName.lastIndexOf('/') + 1).replace('.html', '');
  if (currentPage === 'index' || currentPage === '') currentPage = 'home';

  updateContent(language, currentPage);

  try { localStorage.setItem('language', language); } catch(e) {}
}

function updateContent(language, page) {
  const fr = document.getElementById(`${page}-content-fr`);
  const en = document.getElementById(`${page}-content-en`);
  if (fr) fr.style.display = language === 'fr' ? 'block' : 'none';
  if (en) en.style.display = language === 'fr' ? 'none' : 'block';
}

function toggleLanguageMenu() {
  const menu = document.getElementById('language-menu');
  if (!menu) return;
  menu.style.display = menu.style.display === 'flex' ? 'none' : 'flex';
}

// ── Mobile nav burger ──
document.addEventListener('DOMContentLoaded', function() {
  const burger = document.querySelector('.burger');
  const navbar = document.getElementById('navbar');
  if (burger && navbar) {
    burger.addEventListener('click', function() {
      navbar.classList.toggle('open');
    });
  }

  // Language menu hover
    const switcher = document.getElementById('language-switcher');
    const menu = document.getElementById('language-menu');

    if (switcher && menu) {
    let closeTimeout;

    const openMenu = () => {
        clearTimeout(closeTimeout);
        menu.style.display = 'flex';
    };

    const closeMenu = () => {
        closeTimeout = setTimeout(() => {
        menu.style.display = 'none';
        }, 300); // 150–300ms recommandé
    };

    switcher.addEventListener('mouseenter', openMenu);
    switcher.addEventListener('mouseleave', closeMenu);

    menu.addEventListener('mouseenter', openMenu);
    menu.addEventListener('mouseleave', closeMenu);
    }

  // Close menu on outside click
  document.addEventListener('click', function(e) {
    if (menu && switcher && !switcher.contains(e.target)) {
      menu.style.display = 'none';
    }
  });

  // Tuto accordion
  document.querySelectorAll('.tuto-card-header').forEach(function(header) {
    header.addEventListener('click', function() {
      const body = header.nextElementSibling;
      const isOpen = body && body.classList.contains('open');
      // close all
      document.querySelectorAll('.tuto-card-body').forEach(b => b.classList.remove('open'));
      document.querySelectorAll('.tuto-card-header').forEach(h => h.classList.remove('open'));
      if (!isOpen && body) {
        body.classList.add('open');
        header.classList.add('open');
      }
    });
  });

  // Init language
  let savedLang;
  try { savedLang = localStorage.getItem('language'); } catch(e) {}
  const browserLang = (navigator.language || 'fr').substring(0, 2);
  changeLanguage(savedLang || (browserLang === 'fr' ? 'fr' : 'en'));

  // Mark active nav
  const pathName = window.location.pathname;
  const currentPage = pathName.substring(pathName.lastIndexOf('/') + 1).replace('.html', '');
  document.querySelectorAll('#navbar a').forEach(function(a) {
    const href = a.getAttribute('href') || '';
    const linkPage = href.replace('.html', '').replace('index', '');
    if ((currentPage === '' || currentPage === 'index') && (linkPage === '' || href === 'index.html')) {
      a.classList.add('active');
    } else if (currentPage && href.includes(currentPage)) {
      a.classList.add('active');
    }
  });
});