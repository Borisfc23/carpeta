const obtenerInformacio = (text)=>{
    return new Promise((resolve,reject)=>{
        setTimeout(()=>{
            resolve(text)
        },Math.random()*200)
    })
}
const mostrarData = async()=>{
    data1 = await obtenerInformacio("1:boris");
    data2 = await obtenerInformacio("2:jorge");
    data3 = await obtenerInformacio("3:saul");
    console.log(data1);
    console.log(data2);
    console.log(data3);
}
mostrarData();