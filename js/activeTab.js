const activeTab = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').
forEach(link => {
    if (link.href.includes(`${activeTab}`)) {
        link.classList.add('active');
    }
})
