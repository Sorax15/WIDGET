require('laravel-mix-clean');
const mix = require('laravel-mix');
const path = require('path');

const theme = process.env.npm_config_theme || 'ford';

const config = mix
    .clean({cleanOnceBeforeBuildPatterns: ['./css/*','./js/*','./fonts/*', ]})
    .js('resources/js/app.js', 'public/js')
    .js('resources/js/navbar/navbar.js', 'public/js/navbar')
    .js('resources/js/navbar/navbar-mobile.js', 'public/js/navbar')
    .js('resources/js/modals/question.dialog.js', 'public/js/modals')
    .postCss('resources/css/app.css', 'public/css', [require('postcss-import'), require('tailwindcss')])
    .copyDirectory('resources/fonts', 'public/fonts')
    .options({processCssUrls: false});

if (!mix.inProduction()) {
    console.log('SELECTED THEME **', theme);

    config.sass(`resources/scss/app.scss`, `public/css/themes/${theme}.css`).alias({
        "@theme": path.join(__dirname, `/resources/scss/themes/${theme}.theme.scss`)
    })
}
