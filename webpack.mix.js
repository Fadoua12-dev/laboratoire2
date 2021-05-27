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

mix.js('resources/js/index.js', 'public/js').vue()
    .js('resources/js/login.js', 'public/js').vue()
    .js('resources/js/register.js', 'public/js').vue()
    .js('resources/js/dashboard.js', 'public/js').vue()
    .postCss('resources/css/index.css', 'public/css', []).
    postCss('resources/css/login.css', 'public/css', []).
    postCss('resources/css/register.css', 'public/css', []).
    postCss('resources/css/dashboard.css', 'public/css', []);
