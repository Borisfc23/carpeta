let evento = document.querySelector(".button");
evento.addEventListener("click",saludar);
function saludar(){
    alert("Solo se ejecuta 1 vez");
    evento.removeEventListener("click",saludar);//Evento Click
    document.write("Evento se remueve")
    // let preg = window.confirm("¿Desea ver Youtube?");
    // if(preg == true){
    //     window.location.assign("https://youtube.com");
    // }else{
    //     alert("ok");
    // }
}
//FLUJO DE EVENTOS(EVENT FLOW):SE EJECUTA PRIMERO EL HIJO LUEGO EL PADRE
let evt = document.querySelector(".btn");
let cnt = document.querySelector(".contenedor");
let cnt2 = document.querySelector(".contenedor-ext");
evt.addEventListener("click",(e)=>{
    alert("click en boton");
    e.stopPropagation();
});
cnt.addEventListener("click",(e)=>{
    alert("click en Contenedor");
});/*Con true se ejecuta primero,se le da prioridad */
cnt2.addEventListener("click",(e)=>{
    alert("click en Contenedor Exterior");
});

//Evento dblclick ,doble click
let dblclick = document.querySelector(".dblclick");
dblclick.addEventListener("dblclick",(e)=>{
    alert("hiciste doble click");
});
//Evento mouseover ,doble click
let mouseover = document.querySelector(".mouseover");
mouseover.addEventListener("mouseover",(e)=>{
    alert("Pasaste el puntero por el boton");
});
//Evento mouseover ,pasr el puntero soble el elemento
let mouseout = document.querySelector(".mouseout");
mouseout.addEventListener("mouseout",(e)=>{
    alert("Salir con el puntero del boton");
});
//Evento mouseleave ,pasr el puntero soble el elemento
let mouseleave = document.querySelector(".mouseleave");
mouseleave.addEventListener("mouseleave",(e)=>{
    alert("Salir con el puntero del boton en internet explore");
});
//Evento mouseentr ,entrar con el puntero a un elemento en internet explore
let mouseenter = document.querySelector(".mouseenter");
mouseenter.addEventListener("mouseenter",(e)=>{
    alert("Pasar cpn el puntero en el boton");
});
//Evento mousedown ,
let mousedown = document.querySelector(".mousedown");
mousedown.addEventListener("mousedown",(e)=>{
    alert("Presiona un boton soble el elemento");
});
//Evento mouseup ,
let mouseup = document.querySelector(".mouseup");
mouseup.addEventListener("mouseup",(e)=>{
    alert("suelta un boton soble el elemento");
});

//Evento de Teclado
let input =document.querySelector(".input-prueba");
input.addEventListener("keydown",(e)=>{
    console.log("una tecla fue presionada");
});
input.addEventListener("keypress",(e)=>{
    console.log("un usuario presiono una tecla y la solto");
});
input.addEventListener("keyup",(e)=>{
    console.log("tecla soltada");
});

//EVENTOS DE INTERFAZ
const img = document.querySelector(".img-prueba");
img.addEventListener("error",()=>{
    console.log("ha sucedido un error");//Se da cuando no se cargan las imagenes
});
window.addEventListener("load",(e)=>{
    console.log("tu web cargo completamente");
});
window.addEventListener("resize",(e)=>{
    console.log("Cambio el tamaño de la ventana");
});
window.addEventListener("scroll",(e)=>{
    console.log("Se scroleo ");
});
let inp = document.querySelector(".input-p");
const conte = document.querySelector(".conte");
inp.addEventListener("select",(event)=>{        
    let start = event.target.selectionStart;
    let end = event.target.selectionEnd;
    let textCompleto = inp.value;
    conte.textContent = textCompleto.substring(start,end);
});