/**
 * File tnn-flickity-init.js.
 *
 * Initialisation for Flickity
 *
 */
console.log("Flickity Loaded");

var bannerSlider = new Flickity( '.banner-slider', {
    // options
    cellAlign: 'left',
    contain: true,
    cellSelector: '.banner-slider-cell',
    wrapAround: true,
    lazyLoad: true,
    imagesLoaded: true,
    setGallerySize: true
  });







//TODO 
var recipesSlider = new Flickity( '.popular-recipes-slider', {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.popular-recipes-slider-cell',
   wrapAround: true,
   lazyLoad: true,
   imagesLoaded: true,
   setGallerySize: true
 });

var recipesSliderMB = new Flickity( '.popular-recipes-slider-mb', {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.popular-recipes-slider-cell-mb',
   wrapAround: true,
   lazyLoad: true
 });