// DOM variables
const homeCarouselSlideOne = document.getElementById('home-carousel-slide-one');
const homeCarouselSlideTwo = document.getElementById('home-carousel-slide-two');
const homeCarouselSlideThree = document.getElementById('home-carousel-slide-three');

let showSlide = 1;
setInterval(() => {
    showSlide++;
    console.log(showSlide);

    if (showSlide === 1) {
        homeCarouselSlideOne.classList.remove('home__carousel-slide--no-active');
        homeCarouselSlideTwo.classList.add('home__carousel-slide--no-active');
        homeCarouselSlideThree.classList.add('home__carousel-slide--no-active');
    }

    if (showSlide === 2) {
        homeCarouselSlideOne.classList.add('home__carousel-slide--no-active');
        homeCarouselSlideTwo.classList.remove('home__carousel-slide--no-active');
        homeCarouselSlideThree.classList.add('home__carousel-slide--no-active');
    }

    if (showSlide === 3) {
        homeCarouselSlideOne.classList.add('home__carousel-slide--no-active');
        homeCarouselSlideTwo.classList.add('home__carousel-slide--no-active');
        homeCarouselSlideThree.classList.remove('home__carousel-slide--no-active');
        showSlide = 0;
    }

}, 10000);