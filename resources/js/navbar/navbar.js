const navbar        = document.getElementById("sidebar");
const toogleButton  = document.getElementById("toogle-icon");
const name          = document.getElementById('sidebar').querySelectorAll("header .name");
const progress      = document.getElementById("progress");
const progressClose = document.getElementById("progressClose");

toogleButton.addEventListener("click", toogleSidebar);

(function () {
    navbar.classList.contains('close') ? showSmallProgress() : showFullProgress();
}())

function toogleSidebar() {
    if (name && name.length) {
        if (navbar.classList.contains('close')) {
            setTimeout(() => {
                name[0].style.display = 'block';
            }, 250)
            showFullProgress()
        } else  {
            name[0].style.display = 'none';
            showSmallProgress()
        }
    }
    navbar.classList.toggle('close');
}

function showSmallProgress() {
    setTimeout(() => {
        progressClose.style.display = 'block';
    }, 300)
    progress.style.display = 'none';
}

function showFullProgress() {
    setTimeout(() => {
        progress.style.display = 'block';
    }, 300)
    progressClose.style.display = 'none';
}
