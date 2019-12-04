const mix = require('laravel-mix');
const glob = require('glob');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.sass('resources/sass/page.scss', 'public/css');
glob.sync('resources/sass/responsive/*.scss').map(function(file) {
    mix.sass(file, 'public/css/responsive');
});
mix.copyDirectory('resources/assets/image', 'public/image');

mix.js('resources/js/linkify.js', 'public/js')
    .js('resources/js/jquery.min.js', 'public/js')
    .js('resources/js/jquery-migrate.min.js', 'public/js')
    .js('resources/js/jquery.easing.js', 'public/js')
    .js('resources/js/jquery.isotope.js', 'public/js')
    .js('resources/js/jquery.captify.js', 'public/js')
    .js('resources/js/jquery.blockUI.js', 'public/js')
    .js('resources/js/jquery.qtip.min.js', 'public/js')
    .js('resources/js/jquery.ba-bqq.min.js', 'public/js')
    .js('resources/js/jquery.jScrollPane.js', 'public/js')
    .js('resources/js/jquery.mousewheel.min.js', 'public/js')
    .js('resources/js/jquery.nivo.slider.pack.js', 'public/js')
    .js('resources/js/jquery.infieldlabel.min.js', 'public/js')
    .js('resources/js/jquery.carouFredSel.packed.js', 'public/js')
    .js('resources/js/jquery.fancybox.js', 'public/js')
    .js('resources/js/jquery.fancybox-media.js', 'public/js')
    .js('resources/js/jquery.fancybox-buttons.js', 'public/js')
    .js('resources/js/script.js', 'public/js')
    .js('resources/js/cascade.js', 'public/js');
