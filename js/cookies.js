document.addEventListener('DOMContentLoaded', function() {
    // Vérifier si l'utilisateur a déjà fait ses choix
    if (!localStorage.getItem('cookiePreferences')) {
        showCookieBanner();
    }

    // Gestionnaire pour le bouton "Paramètres des cookies"
    document.getElementById('cookie-settings').addEventListener('click', function(e) {
        e.preventDefault();
        showCookieModal();
    });
});

function showCookieBanner() {
    const banner = document.createElement('div');
    banner.className = 'cookie-banner';
    banner.innerHTML = `
        <div class="cookie-banner-content">
            <p>Nous utilisons des cookies pour améliorer votre expérience. 
               Vous pouvez personnaliser vos préférences.</p>
            <div class="cookie-banner-buttons">
                <button onclick="acceptAllCookies()">Tout accepter</button>
                <button onclick="showCookieModal()">Personnaliser</button>
                <button onclick="refuseAllCookies()">Tout refuser</button>
            </div>
        </div>
    `;
    document.body.appendChild(banner);
}

function showCookieModal() {
    const modal = document.createElement('div');
    modal.className = 'cookie-modal';
    modal.innerHTML = `
        <div class="cookie-modal-content">
            <h3>Paramètres des cookies</h3>
            <div class="cookie-options">
                <div class="cookie-option">
                    <label>
                        <input type="checkbox" id="essential-cookies" checked disabled>
                        Cookies essentiels (obligatoires)
                    </label>
                    <p>Nécessaires au fonctionnement du site</p>
                </div>
                <div class="cookie-option">
                    <label>
                        <input type="checkbox" id="analytics-cookies">
                        Cookies analytiques
                    </label>
                    <p>Nous aident à comprendre comment vous utilisez le site</p>
                </div>
                <div class="cookie-option">
                    <label>
                        <input type="checkbox" id="preference-cookies">
                        Cookies de préférences
                    </label>
                    <p>Permettent de sauvegarder vos préférences (ex: thème sombre/clair)</p>
                </div>
            </div>
            <div class="cookie-modal-buttons">
                <button onclick="saveCookiePreferences()">Enregistrer mes choix</button>
                <button onclick="closeModal()">Fermer</button>
            </div>
        </div>
    `;
    document.body.appendChild(modal);
}

function saveCookiePreferences() {
    const preferences = {
        analytics: document.getElementById('analytics-cookies').checked,
        preferences: document.getElementById('preference-cookies').checked,
        essential: true
    };
    localStorage.setItem('cookiePreferences', JSON.stringify(preferences));
    closeModal();
}

function acceptAllCookies() {
    const preferences = {
        analytics: true,
        preferences: true,
        essential: true
    };
    localStorage.setItem('cookiePreferences', JSON.stringify(preferences));
    closeBanner();
}

function refuseAllCookies() {
    const preferences = {
        analytics: false,
        preferences: false,
        essential: true
    };
    localStorage.setItem('cookiePreferences', JSON.stringify(preferences));
    closeBanner();
}

function closeModal() {
    const modal = document.querySelector('.cookie-modal');
    if (modal) modal.remove();
}

function closeBanner() {
    const banner = document.querySelector('.cookie-banner');
    if (banner) banner.remove();
} 