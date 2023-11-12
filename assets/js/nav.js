// DOM variables
const headerContainerMenuIcon = document.getElementById('header-container-menu-icon');
const headerMenuIconOne = document.getElementById('header-menu-icon-one');
const headerMenuIconTwo = document.getElementById('header-menu-icon-two');
const headerMenuIconThree = document.getElementById('header-menu-icon-three');
const headerNav = document.getElementById('header-nav');

// Flag open and close menu
let flag = true;

// Click event
headerContainerMenuIcon.addEventListener('click', () => {
    if (flag) {
        flag = false;
        headerMenuIconOne.classList.add('header__icon-line-one--open');
        headerMenuIconTwo.classList.add('header__icon-line-two--open');
        headerMenuIconThree.classList.add('header__icon-line-three--open');
        headerNav.classList.add('nav__active');
    } else {
        flag = true;
        headerMenuIconOne.classList.remove('header__icon-line-one--open');
        headerMenuIconTwo.classList.remove('header__icon-line-two--open');
        headerMenuIconThree.classList.remove('header__icon-line-three--open');
        headerNav.classList.remove('nav__active');
    }
})