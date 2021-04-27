// webpack.mix.js

let mix = require('laravel-mix');

mix
.js('src/main.js', '/')
.sass('src/main.scss', 'main.css')
.setPublicPath('dist')
.sourceMaps();
