var navigation = {
    init: function () {
        const burgerIcon = document.getElementsByClassName('burger-icon');
        burgerIcon[0].addEventListener('click', navigation.extendNav);

        window.addEventListener('resize', navigation.toggleNavigation);
    },
    extendNav: function() {
        const pageLinks = document.getElementById('pageLinks');
        let style = window.getComputedStyle(pageLinks);
        let displayState = style.getPropertyValue('display');

        if (displayState === 'none') {
            pageLinks.style.display = 'block';
        } else {
            pageLinks.style.display = 'none';
        }
    },
    toggleNavigation: function() {
        let screenWidth = screen.width;

        if (screenWidth >= 768) {
            document.getElementById('pageLinks').style.display = 'block';
        }
    }
}

document.addEventListener('DOMContentLoaded', navigation.init);