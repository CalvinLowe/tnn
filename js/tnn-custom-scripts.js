/**
 * File tnn-custom-scripts.js.
 *
 * Initialisation and snippet scripts
 *
 */

 var bannerSlider = document.querySelector('.banner-slider');
 var flkty = new Flickity( bannerSlider, {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.banner-slider-cell',
   wrapAround: true,
   lazyLoad: true
 });

 var recipesSlider = document.querySelector('.popular-recipes-slider');
 var flkty = new Flickity( recipesSlider, {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.popular-recipes-slider-cell',
   wrapAround: true,
   lazyLoad: true
 });
