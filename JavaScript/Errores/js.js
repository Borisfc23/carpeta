try {
    asdasda
    throw "Sirve para lanzar errores";
} catch (error) {
    console.log("ReferenceError, error de referencia");
}finally{
    console.log("finally Siempre se ejecuta");    
}