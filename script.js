"use strict";

// Fonction pour changer la langue
function changeLanguage(language) {
    // Définir la langue sélectionnée
    document.documentElement.lang = language;

    // Mettre à jour le contenu de la navigation en fonction de la langue
    document.getElementById('nav-home').innerText = (language === 'fr') ? 'Accueil' : 'Home';
    document.getElementById('nav-cv').innerText = 'CV';
    document.getElementById('nav-projects').innerText = (language === 'fr') ? 'Projets' : 'Projects';

    // Mettre à jour l'image du drapeau dans le switcher de langue
    const flagImage = document.querySelector('.current-language img');
    flagImage.src = `media/logo/logo_${language}.svg`;

    // Cacher le menu déroulant
    document.getElementById('language-menu').style.display = 'none';

    // Obtenir le chemin d'accès de l'URL
    const pathName = window.location.pathname;
    let currentPage = pathName.substring(pathName.lastIndexOf('/') + 1).replace('.html', '');
    if (currentPage === "index") currentPage = "home";

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
        languageMenu.style.top = `${currentLanguage.offsetHeight}px`;
    }
}

// Fonction pour gérer l'affichage du menu déroulant au survol
function toggleLanguageMenuOnHover() {
    const languageSwitcher = document.getElementById('language-switcher');
    const languageMenu = document.getElementById('language-menu');

    languageSwitcher.addEventListener('mouseenter', () => {
        languageMenu.style.display = 'flex';
    });

    languageSwitcher.addEventListener('mouseleave', () => {
        languageMenu.style.display = 'none';
    });
}

// Fonction pour gérer le soulignement au survol des options du menu et des liens de navigation
function handleHoverEffect(elements) {
    elements.forEach(element => {
        element.addEventListener('mouseenter', () => {
            element.style.textDecoration = 'underline';
        });
        element.addEventListener('mouseleave', () => {
            element.style.textDecoration = 'none';
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

// Initialiser les gestionnaires de survol
handleHoverEffect(document.querySelectorAll('.nav-link'));
handleHoverEffect(document.querySelectorAll('.language-option'));

// Initialiser la gestion du survol du menu déroulant
toggleLanguageMenuOnHover();

// Initialiser la langue du document
const browserLanguage = navigator.language.substr(0, 2);
const savedLanguage = localStorage.getItem('language') || browserLanguage;
changeLanguage(savedLanguage);