//Menu Hamburger
let nav = document.querySelector('nav');
let trigger = document.querySelector('.menu__mobile__trigger');
    trigger.addEventListener('click', function () {
        nav.classList.toggle('open');
    });
