const navbar = document.getElementById("sidebar");
const toogleButton = document.getElementById("toogle-icon");
const preloader = document.getElementById('load-page');

(function () {
    const status = localStorage.getItem('statusSideBar');
    if (status === 'Open') navbar.classList.add('close')
}())

toogleButton.addEventListener("click", () => {
    onShowPreload();

    navbar.classList.contains('close') ?
        changeStatusSideBar('Hide') :
        changeStatusSideBar('Open');

    navbar.classList.toggle('close');
});

function onShowPreload() {
    preloader.style.display = 'block';
    document.body.classList.add('load-show');

    setTimeout(() => {
        preloader.style.display = 'none';
        document.body.classList.remove('load-show')
    }, 200)
}

function changeStatusSideBar(status) {
    localStorage.setItem('statusSideBar', status);
}




