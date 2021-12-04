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

mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
mix.copyDirectory('node_modules/admin-lte/docs_html/assets', 'public/admin_source/assets');
mix.copyDirectory('node_modules/admin-lte/dist', 'public/admin_source/dist');
mix.copyDirectory('node_modules/admin-lte/plugins', 'public/admin_source/plugins');