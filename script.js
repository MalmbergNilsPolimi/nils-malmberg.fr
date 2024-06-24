// Toggle mobile navigation
const navbar = document.getElementById('navbar');
const toggleButton = document.getElementById('toggle-button');

toggleButton.addEventListener('click', () => {
    navbar.classList.toggle('responsive');
});
