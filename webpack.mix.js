require('laravel-mix-clean');
const mix = require('laravel-mix');
const path = require('path');

const theme = process.env.npm_config_theme || 'ford';

const config = mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [require('postcss-import'), require('tailwindcss')])
    .copyDirectory('resources/fonts', 'public/fonts')
    .options({processCssUrls: false});

if (!mix.inProduction()) {
    console.log('SELECTED THEME **', theme);

    config.sass(`resources/scss/app.scss`, `public/css/themes/${theme}.css`).alias({
        "@theme": path.join(__dirname, `/resources/scss/themes/${theme}.theme.scss`)
    })
}
