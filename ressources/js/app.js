//Menu Hamburger
let nav = document.querySelector('nav');
let trigger = document.querySelector('.menu__mobile__trigger');
    trigger.addEventListener('click', function () {
        nav.classList.toggle('open');
    });

//Social
const socialBtn = document.querySelector('#social');
const socialWindow = document.querySelector('.socialMedia');
const close = document.querySelector('#close');
const list = document.querySelectorAll('.sci li');

socialBtn.addEventListener('click', () => {
    socialWindow.classList.add('show');
})
close.addEventListener('click', () => {
    socialWindow.classList.remove('show');
})

list.forEach(elements => {
    elements.addEventListener('mouseenter', function (event) {
        let color = event.target.getAttribute('data-color');
        socialWindow.style.backgroundColor = color;
    });
    elements.addEventListener('mouseleave', function (event) {
        let color = event.target.getAttribute('data-color');
        socialWindow.style.backgroundColor = "#292929";
    });
})