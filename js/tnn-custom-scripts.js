/**
 * File tnn-custom-scripts.js.
 *
 * Initialisation and snippet scripts
 *
 */

 var elem = document.querySelector('.banner-slider');
 var flkty = new Flickity( elem, {
   // options
   cellAlign: 'left',
   contain: true,
   cellSelector: '.banner-slider-cell',
   wrapAround: true
 });
