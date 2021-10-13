let ubicacionPrincipal = window.pageYOffset;/*Indica la posicion en Y */

AOS.init();

window.addEventListener("scroll",()=>{
    let desplazamientoActual = window.pageYOffset;
    if(ubicacionPrincipal >= desplazamientoActual){
        document.getElementsByTagName("nav")[0].style.top = "0px";
    }else{
        document.getElementsByTagName("nav")[0].style.top = "-50px";
    }
    ubicacionPrincipal = desplazamientoActual;
});

/*Menu hamburguer*/
let enlacesHeader = document.querySelectorAll(".enlaces-header")[0];
let semaforo = true;
let hamburguer = document.querySelectorAll(".hamburguer")[0];
let enlaces = document.querySelector('.enlaces');
let body = document.getElementsByTagName('body');
hamburguer.addEventListener('click',()=>{
    if(semaforo){
        document.querySelectorAll('.hamburguer')[0].style.color = '#fff';
        enlacesHeader.classList.add('enlace');        
        semaforo = false;
    }else{
        document.querySelectorAll('.hamburguer')[0].style.color = '#000';
        semaforo = true;
    }
    enlacesHeader.classList.toggle('menudos');    
})
