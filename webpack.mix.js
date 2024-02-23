let mix = require('laravel-mix');
mix.disableSuccessNotifications();

mix.js('resources/js/app.js', 'public/assets/js/')
    .css('resources/css/app.css', 'public/assets/css/')
    .sass('resources/sass/app.scss', 'public/assets/css/');

if (mix.inProduction()) {
    mix.version();
}
