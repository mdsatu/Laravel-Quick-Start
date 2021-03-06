const mix = require('laravel-mix');

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

mix.js('resources/js/back/app.js', 'public/back/js')
    .js('resources/js/front/app.js', 'public/front/js')
    .sass('resources/sass/front/app.scss', 'public/front/css')
    .sass('resources/sass/back/app.scss', 'public/back/css');
