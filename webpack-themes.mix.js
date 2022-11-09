const mix = require('laravel-mix');
const path = require('path');

const theme = process.env.theme || 'ford';

console.log('SELCET THEME **', theme)

mix.sass(`resources/scss/app.scss`, `public/css/themes/${theme}.css`).alias({
    "@theme": path.join(__dirname, `/resources/scss/themes/${theme}.theme.scss`)
});
