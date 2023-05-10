const btnMenu = document.querySelector('#btn-menu')
const nav = document.querySelector('.header_nav')

btnMenu.addEventListener('click', () => nav.classList.toggle('header_nav-activate'))