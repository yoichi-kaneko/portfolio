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
mix.sass('resources/sass/vendors.scss', 'public/css');
glob.sync('resources/sass/responsive/*.scss').map(function(file) {
    mix.sass(file, 'public/css/responsive');
});
mix.copyDirectory('resources/assets/image', 'public/image');

mix.js('resources/js/vendors.js', 'public/js')
    .js('resources/js/jquery.captify.js', 'public/js')
    .js('resources/js/page_config.js', 'public/js')
    .js('resources/js/cascade.js', 'public/js')
    .js('resources/js/script.js', 'public/js');

glob.sync('resources/js/page_script/*.js').map(function(file) {
    mix.js(file, 'public/page_script');
});

mix.copy('resources/js/jquery-migrate.min.js', 'public/js/jquery-migrate.min.js');
mix.copy('resources/js/jquery.blockUI.js', 'public/js/jquery.blockUI.js');
mix.copy('resources/js/jquery.ba-bqq.min.js', 'public/js/jquery.ba-bqq.min.js');
mix.copy('resources/js/jquery.nivo.slider.pack.js', 'public/js/jquery.nivo.slider.pack.js');
mix.copy('resources/js/jquery.carouFredSel.packed.js', 'public/js/jquery.carouFredSel.packed.js');
