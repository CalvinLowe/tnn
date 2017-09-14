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
    lazyLoad: true
  });

var bannerSliderMB = new Flickity( '.banner-slider-mb', {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.banner-slider-cell-mb',
   wrapAround: true,
   lazyLoad: true
 });

var recipesSlider = new Flickity( '.popular-recipes-slider', {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.popular-recipes-slider-cell',
   wrapAround: true,
   lazyLoad: true
 });

var recipesSliderMB = new Flickity( '.popular-recipes-slider-mb', {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.popular-recipes-slider-cell-mb',
   wrapAround: true,
   lazyLoad: true
 });