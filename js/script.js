document.addEventListener('DOMContentLoaded', function() {
    let currentPath = window.location.pathname,
        search = (currentPath !== '/category.php') ? currentPath : '/catalog.php',
        activeNavLink = document.querySelector('.nav__menu-link[href="' + search + '"]');
    console.log(activeNavLink);
    activeNavLink.classList.add('active');
});