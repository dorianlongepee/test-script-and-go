$(document).ready(() => {
    // Compteur de vues (jQuery)
    const counterJQuery = $('.view-counter');
    // Compteur de vues (Sans jQuery)
    const counterJS = document.querySelector('.view-counter');

    console.log(counterJS.innerHTML);

    /**
     * 7. Incrémentez le compteur de vues
     */
    setInterval(() => {
        counterJS.innerHTML = parseInt(counterJS.innerHTML, 10) + 1;
    }, 1500);

});