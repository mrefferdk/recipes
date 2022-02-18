const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js').postCss('resources/css/app.css', 'public/css', [
    require('postcss-import'),
    require('tailwindcss'),
    require('autoprefixer'),
]);

mix.js('resources/js/tinymce.js', 'public/js');
//mix.js('node_modules/jquery/dist/jquery.js', 'public/js'); // TODO why isn't it working?
mix.js('node_modules/select2/dist/js/select2.js', 'public/js').postCss('node_modules/select2/dist/css/select2.css', 'public/css');
