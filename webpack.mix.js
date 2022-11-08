const mix = require('laravel-mix');
const path = require('path');
const fs = require('fs');

const theme = process.env.npm_config_theme || 'ford';
const files = fs.readdirSync(path.join(__dirname, `resources/scss/themes`));

const config = mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [require('postcss-import'), require('tailwindcss')])
    .copyDirectory('resources/fonts', 'public/fonts')
    .options({processCssUrls: false});

if(mix.inProduction()) {
    files.reduce((configuration, item) => {
        const theme = item.split('.')[0];

        return configuration.sass(`resources/scss/${theme}.scss`, `public/css/themes`).alias({
            "@theme": path.join(__dirname, `/resources/scss/themes/${theme}.theme.scss`)
        })
    }, config.before(() => createFileThemes())).after(() => deleteTempFileTheme())
} else {
    config.sass(`resources/scss/${theme}.scss`, `public/css/themes`).alias({
        "@theme": path.join(__dirname, `/resources/scss/themes/${theme}.theme.scss`)
    })
}

function createFileThemes() {
    return new Promise((resolve, reject) => {
        files.forEach((file) => {
            const theme = file.split('.')[0];
            try {
                fs.writeFileSync(path.join(__dirname, `resources/scss/${theme}.scss`), "@import 'app';");
            } catch (e) {
                return reject();
            }
        });

        return resolve();
    });
}

function deleteTempFileTheme() {
    return new Promise((resolve, reject) => {
        files.forEach((file) => {
            const theme = file.split('.')[0];
            fs.stat((path.join(__dirname, `resources/scss/${theme}.scss`)), (err, stats) => {
                if (err) {
                    return reject();
                }

                fs.unlink((path.join(__dirname, `resources/scss/${theme}.scss`)), (err) => {
                    if (err) return reject();
                    return resolve();
                })
            })
        });
    });
}
