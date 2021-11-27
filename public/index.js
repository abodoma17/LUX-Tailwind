const menuButton = document.querySelector('#menuButton');
const menu = document.querySelector('#phoSideBar');

menuButton.addEventListener('click', () => {
    if(menu.classList.contains('hidden')){
        menu.classList.remove('hidden');
    }
    else{
        menu.classList.add('hidden');
    }
})