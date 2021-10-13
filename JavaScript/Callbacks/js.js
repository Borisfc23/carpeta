//El callback es una funcion dentro de otra funcion.
function prueba(callback){
    callback("hola mundo");
}
function mensaje(msj) {
    console.log(msj);
}
prueba(mensaje);

function prueba2(cb){
    cb("hola Mundo 2");
}
prueba2(function (msj){
    console.log(msj);
});
prueba2((mss)=>{console.log(mss);})

