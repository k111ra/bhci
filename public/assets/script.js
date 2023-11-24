$(document).ready(function() {
    // Cacher tous les sous-menus au chargement de la page
    $('.custom-dropdown-menu').hide();

    $('.custom-dropdown-toggle').on('click', function() {
        // Récupère le sous-menu correspondant
        var dropdownMenu = $(this).siblings('.custom-dropdown-menu');

        // Affiche ou cache le sous-menu
        dropdownMenu.toggle();

        // Inverse la flèche
        var chevron = $(this).find('i');
        chevron.toggleClass('fa-chevron-down fa-chevron-up');

        // Réinitialise les autres flèches
        $('.custom-dropdown-toggle').not(this).find('i').removeClass('fa-chevron-up').addClass('fa-chevron-down');

        // Cache les autres sous-menus
        $('.custom-dropdown-menu').not(dropdownMenu).hide();
    });
});

function resetDropdown(buttonId) {
    // Réinitialiser la logique de réinitialisation ici
}

function applyDropdown(buttonId) {
    // Appliquer la logique de validation ici
}
