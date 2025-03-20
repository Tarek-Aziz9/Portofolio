document.addEventListener('DOMContentLoaded', function() {
    const themeToggle = document.getElementById('theme-toggle');
    const icon = themeToggle.querySelector('i');
    const body = document.body;

    // Vérifie si un thème est déjà stocké
    const currentTheme = localStorage.getItem('theme');
    if (currentTheme) {
        body.setAttribute('data-theme', currentTheme);
        updateIcon(currentTheme === 'dark');
    }

    themeToggle.addEventListener('click', function() {
        const isDark = body.getAttribute('data-theme') === 'dark';
        const newTheme = isDark ? 'light' : 'dark';
        
        body.setAttribute('data-theme', newTheme);
        localStorage.setItem('theme', newTheme);
        updateIcon(!isDark);
    });

    function updateIcon(isDark) {
        icon.className = isDark ? 'fa fa-sun-o' : 'fa fa-moon-o';
    }
}); 