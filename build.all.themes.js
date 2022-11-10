const fs = require('fs');
const path = require("path");
const { spawn } = require('node:child_process');


let cmd = 'npm.cmd';

if (process.platform === 'linux' || process.platform === 'darwin') {
    cmd = 'npm'
}

const files = fs.readdirSync(path.join(__dirname, `resources/scss/themes`));

files.forEach((file) => {
    const theme = file.split('.')[0];

    const ls = spawn(cmd, ['run', 'mix', '--', '--production', '--mix-config=webpack-themes.mix.js'], { env: { theme }});

    ls.stdout.on('data', (data) => {
        console.log(`Build Theme ${theme}: ${data}`);
    });

    ls.on('close', (code) => {
        console.log(`build ${theme} process exited with code ${code}`);
    });

    ls.on('error', (e) => {
        console.log(`ERROR BUILD ${theme}`, e);
    })
});
