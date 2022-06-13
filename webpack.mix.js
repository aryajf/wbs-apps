const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/wbs.scss', 'public/css')
    .sourceMaps()
    .browserSync("127.0.0.1:8000");