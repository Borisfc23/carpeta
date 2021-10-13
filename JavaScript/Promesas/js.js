// let nombre = "pedro";
// const promesa = new Promise((resolve,reject)=>{
//     if(nombre != "peedro"){
//         reject("El nombre no es Pedro");
//     }else{
//         resolve(nombre);
//     }
// });
//El then se usa cuando las condiciones se cumplen
// promesa.then((resultado)=>{
//     console.log(resultado);
// }).catch((e)=>{//El catch maneja errores
//     console.log(e);
// })

class Persona{
    constructor(nombre,instagram){
        this.nombre = nombre;
        this.instragram = instagram;
    }
}
const data = [
    ["boris","flores@gmail.com"],
    ["sara","sara@gmail.com"],
    ["rocio"]    
];
const personas = [];
for (let i = 0; i < data.length; i++) {
    personas[i] = new Persona(data[i][0],data[i][1]);
}
const obtenerPersona = (id)=>{
    return new Promise((resolve,reject)=>{
        if(personas[id] == undefined){
            reject("No se encuentra la persona")
        }else{
            resolve(personas[id]);
        }
    })
};
const obtenerInstagram = (id)=>{
    return new Promise((resolve,reject)=>{
        if(personas[id].instragram == undefined){
            reject("No se encuentra el instagram")
        }else{
            resolve(personas[id].instragram);
        }
    })
}
let id = 3;
obtenerPersona(id).then((persona)=>{
    console.log(persona.nombre);
    return obtenerInstagram(id);
}).then((instagram)=>{
        console.log(instagram);
    }).catch((error)=>{
        console.log(error);
    })
