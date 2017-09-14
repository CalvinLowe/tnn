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

 var bannerSliderMB = document.querySelector('.banner-slider-mb');
 var flkty = new Flickity( bannerSliderMB, {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.banner-slider-cell-mb',
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

 var recipesSliderMB = document.querySelector('.popular-recipes-slider-mb');
 var flkty = new Flickity( recipesSliderMB, {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.popular-recipes-slider-cell-mb',
   wrapAround: true,
   lazyLoad: true
 });


 (function($) {
   window.fnames = [];
   window.ftypes = [];
   fnames[0]='EMAIL';
   ftypes[0]='email';
   fnames[1]='FNAME';
   ftypes[1]='text';
   fnames[2]='LNAME';
   ftypes[2]='text';
 }
 (jQuery));
 var $mcj = jQuery.noConflict(true);
