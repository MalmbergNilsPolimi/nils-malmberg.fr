// script.js

// Fonction pour changer la langue
function changeLanguage(language) {
    // Définir la langue sélectionnée
    document.documentElement.lang = language;

    // Mettre à jour le contenu de la navigation en fonction de la langue
    document.getElementById('nav-home').innerText = (language === 'fr') ? 'Accueil' : 'Home';
    document.getElementById('nav-cv').innerText = (language === 'fr') ? 'CV' : 'CV';
    document.getElementById('nav-projects').innerText = (language === 'fr') ? 'Projets' : 'Projects';

    // Mettre à jour d'autres éléments de la page en fonction de la langue

    // Mettre à jour l'image du drapeau dans le switcher de langue
    const flagImage = document.querySelector('.current-language img');
    flagImage.src = `media/logo/logo_${language}.svg`;

    // Cacher le menu déroulant
    const languageMenu = document.getElementById('language-menu');
    languageMenu.style.display = 'none';

    
    // Obtenir le chemin d'accès de l'URL
    const pathName = window.location.pathname;
    // Extraire le nom de la page à partir du chemin d'accès
    let currentPage = pathName.substring(pathName.lastIndexOf('/') + 1).replace('.html', '');
    if (currentPage=="index") {
        currentPage="home"
    }

    // Mettre à jour le texte de la page
    updateContent(language, currentPage);

    // Sauvegarder la langue sélectionnée dans le stockage local du navigateur
    localStorage.setItem('language', language);
}

// Fonction pour afficher/cacher le menu déroulant
function toggleLanguageMenu() {
    const languageMenu = document.getElementById('language-menu');
    const currentLanguage = document.querySelector('.current-language');

    if (languageMenu.style.display === 'block') {
        languageMenu.style.display = 'none';
    } else {
        languageMenu.style.display = 'block';
        languageMenu.style.top = `${currentLanguage.offsetHeight}px`; // Ajustez si nécessaire
    }
}

// Fonction pour gérer l'affichage du menu déroulant au survol
function toggleLanguageMenuOnHover() {
    const languageSwitcher = document.getElementById('language-switcher');
    const languageMenu = document.getElementById('language-menu');

    languageSwitcher.addEventListener('mouseenter', function () {
        languageMenu.style.display = 'flex';
    });

    languageSwitcher.addEventListener('mouseleave', function () {
        languageMenu.style.display = 'none';
    });
}

// Fonction pour gérer le soulignement au survol des options du menu
function handleHoverEffectOnOptions() {
    const languageOptions = document.querySelectorAll('.language-option');

    languageOptions.forEach(function (option) {
        option.addEventListener('mouseenter', function () {
            option.style.textDecoration = 'underline';
        });

        option.addEventListener('mouseleave', function () {
            option.style.textDecoration = 'none';
        });
    });
}

// Fonction pour gérer le soulignement au survol des éléments de la bannière
function handleHoverEffectOnNavLinks() {
    const navLinks = document.querySelectorAll('.nav-link');

    navLinks.forEach(function (link) {
        link.addEventListener('mouseenter', function () {
            link.style.textDecoration = 'underline';
        });

        link.addEventListener('mouseleave', function () {
            link.style.textDecoration = 'none';
        });
    });
}

function updateContent(language, page) {
    const pageContentFr = document.getElementById(`${page}-content-fr`);
    const pageContentEn = document.getElementById(`${page}-content-en`);

    if (language === 'fr') {
        pageContentFr.style.display = 'block';
        pageContentEn.style.display = 'none';
    } else {
        pageContentFr.style.display = 'none';
        pageContentEn.style.display = 'block';
    }
}



// Initialiser la gestion du survol des éléments de la bannière
handleHoverEffectOnNavLinks();

// Initialiser la gestion du survol du menu déroulant
toggleLanguageMenuOnHover();

// Initialiser la gestion du survol des options du menu
handleHoverEffectOnOptions();

// Initialiser la langue du document
const browserLanguage = navigator.language.substr(0, 2);
const savedLanguage = localStorage.getItem('language') || browserLanguage;

changeLanguage(savedLanguage);