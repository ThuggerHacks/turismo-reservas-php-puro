let menuButton, closeMenuButton, menu, openMenuInterval, closeMenuInterval;

window.onload = () => {
    __init__();
}

//inicializar todas as variaveis e listeners de eventos 

const __init__ = () => {
    menuButton = document.querySelector(".menu-btn");
    closeMenuButton = document.querySelector(".navbar-close");
    menu = document.querySelector(".navbar-ul");

    menuButton.addEventListener("click",openMenu);
    closeMenuButton.addEventListener("click",closeMenu);
}

//evento accionado quando clicamos no botao abrir menu

const openMenu = () => {
   openMenuInterval = setInterval(slideMenuToRight,14);
}

//funcao para fazer slide do menu ao abrir menu

let left = -300;
const slideMenuToRight = () => {
    menu.style.display = "block";
    menu.style.left = left+"%";
    closeMenuButton.style.display = "block";
    if(left<=-10){
         left+=10;
    }else{
        menuButton.style.display = "none";
        clearInterval(openMenuInterval);
    }
   
}

//evento accionado ao fechar o menu

const closeMenu = () => {
    closeMenuInterval = setInterval(slideMenuToLeft,14);
   
}

//funcao para fazer slide ao fechar o menu

let right = 100;
const slideMenuToLeft = () => {
    menuButton.style.display = "block";
    menu.style.left = left+"%";
    closeMenuButton.style.display = "none";
    if(left>=-300){
         left-=10;
    }else{
        menu.style.display = "none";
        clearInterval(closeMenuInterval);
    }
}