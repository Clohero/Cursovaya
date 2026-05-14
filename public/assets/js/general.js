const header = document.getElementById('pageHeader');
window.addEventListener('scroll', () => {
    if (window.scrollY > 80) {
        header.classList.add('is-scrolled');
    } else {
        header.classList.remove('is-scrolled');
    }
});