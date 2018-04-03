/**
 * File tnn-flickity-init.js.
 *
 * Initialisation for Flickity
 *
 */
var bannerSlider = new Flickity( '.banner-slider', {
    // options
    cellAlign: 'left',
    contain: true,
    cellSelector: '.banner-slider-cell',
    wrapAround: true,
    lazyLoad: true,
    imagesLoaded: true,
    setGallerySize: true,
    percentPosition: false
  });
var recipesSlider = new Flickity( '.popular-recipes-slider', {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.popular-recipes-slider-cell',
   wrapAround: true,
   lazyLoad: true,
   imagesLoaded: true,
   setGallerySize: true,
   percentPosition: false
 });

