const open = document.getElementById('open-mobile');
const close = document.getElementById('close-mobile');
const sideBar = document.getElementById('sidebar-mobile');

open.addEventListener('click', () => {
    sideBar.style.display = 'block';
    document.body.classList.add('mobile-navigation');
});

close.addEventListener('click', () => {
    sideBar.style.display = 'none';
    document.body.classList.remove('mobile-navigation');
});

