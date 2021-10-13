//EL setTimeout se ejecuta solo 1 vez
let saludar = setTimeout(()=>{
    document.write("hola");
},2000);
clearTimeout(saludar);
//El setInterval se ejecuta varias veces      
let intervalo = setInterval(()=>{    
    document.write("HOLA\n");       
},1000);
setTimeout(()=>{
    clearInterval(intervalo);
},10000);
