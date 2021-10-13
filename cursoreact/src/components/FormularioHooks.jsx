// import React, { Fragment, useState } from "react";

// const FormularioHooks = () => {
//   const [form, setform] = useState({});

//   const handleChange = (e) => {
//     setform({
//       ...form,
//       [e.target.name]: e.target.value,
//     });
//   };

//   const handleChecked = (e) => {
//     setform({
//       ...form,
//       [e.target.name]: e.target.value,
//     });
//   };
//   // const [mensaje, setmensaje] = useState("");
//   // const [sabor, setsabor] = useState("");
//   // const [lenguaje, setlenguaje] = useState("");
//   // const [terminos, setterminos] = useState(false);

//   // let lenguajes = ["vanilla", "react", "angular", "vue", "svelte"];

//   const handleSubmit = (e) => {
//     e.preventDefault();
//     alert("Formulario enviado");
//   };
//   return (
//     <Fragment>
//       <h2>FORMULARIOS CONTROLADORS-HOOKS</h2>
//       <form action="" onSubmit={handleSubmit}>
//         <label htmlFor="mensaje">Nombre</label>
//         <input
//           type="text"
//           id="mensaje"
//           name="mensaje"
//           value={form.mensaje}
//           // onChange={(e) => setnombre(e.target.value)}
//           onChange={handleChange}
//         />
//         <h3>Elige tu sabor JS favorito</h3>
//         <input
//           type="radio"
//           id="vanilla"
//           name="sabor"
//           value="vanilla"
//           // onChange={(e) => setsabor(e.target.value)}
//           onChange={handleChange}
//         />
//         <label htmlFor="vanilla">vanilla</label>

//         <input
//           type="radio"
//           id="react"
//           name="sabor"
//           value="react"
//           defaultChecked
//           // onChange={(e) => setsabor(e.target.value)}
//           onChange={handleChange}
//         />
//         <label htmlFor="react">react</label>
//         <input
//           type="radio"
//           id="angular"
//           name="sabor"
//           value="angular"
//           // onChange={(e) => setsabor(e.target.value)}
//           onChange={handleChange}
//         />
//         <label htmlFor="angular">angular</label>
//         <input
//           type="radio"
//           id="vue"
//           name="sabor"
//           value="vue"
//           // onChange={(e) => setsabor(e.target.value)}
//           onChange={handleChange}
//         />
//         <label htmlFor="vue">vue</label>
//         <input
//           type="radio"
//           id="svelte"
//           name="sabor"
//           value="svelte"
//           // onChange={(e) => setsabor(e.target.value)}
//           onChange={handleChange}
//         />
//         <label htmlFor="svelte">svelte</label>

//         <h3>Elige tu lenguaje de programacion favorito</h3>
//         <select
//           name="lenguaje"
//           id=""
//           defaultValue
//           // onChange={(e) => setlenguaje(e.target.value)}
//           onChange={handleChange}
//         >
//           <option value="">---</option>
//           <option value="js">JavaScript</option>
//           <option value="php">PHP</option>
//           <option value="py">Python</option>
//           <option value="go">GO</option>
//           <option value="rb">Ruby</option>
//         </select>
//         <br />
//         <label htmlFor="terminos">Aceptos terminos y condiciones</label>
//         <input
//           type="checkbox"
//           id="terminos"
//           name="terminos"
//           // onChange={(e) => setterminos(e.target.checked)} //e.target.checker devuelve true o false
//           onChange={handleChecked}
//         />
//         <br />
//         <input type="submit" value="enviar" />
//       </form>
//       <hr />
//     </Fragment>
//   );
// };

// export default FormularioHooks;

/* {lenguajes.map((element, index) => (
        <div key={index}>
          <input
            type="radio"
            id={element}
            name="sabor"
            value={element}
            onChange={(e) => setsabor(e.target.value)}
          />
          <label htmlFor={element}>{element}</label>
        </div>
      ))} */

import React, { Fragment, useState } from "react";

const FormularioHooks = () => {
  const [forms, setforms] = useState({});
  const handleChange = (e) => {
    setforms({
      ...forms,
      [e.target.name]: e.target.value,
    });
  };

  const handleChecked = (e) => {
    setforms({
      ...forms,
      [e.target.name]: e.target.checked,
    });
  };
  return (
    <Fragment>
      <h2>FORMULARIOS CON HOOKS</h2>
      <form action="">
        <h3>INPUT</h3>
        <label htmlFor="msj">Ingrese Nombre: </label>
        <input
          type="text"
          name="nombre"
          id="nombre"
          value={forms.nombre}
          onChange={handleChange}
        />
        <br />
        <label htmlFor="msj">Ingrese Apellido: </label>
        <input
          type="text"
          name="apellido"
          id="apellido"
          value={forms.apellido}
          onChange={handleChange}
        />

        <h3>RADIO BUTTONS</h3>
        <input
          type="radio"
          id="lenguaje"
          name="lenguaje"
          value="JavaScript"
          onChange={handleChange}
        />
        <label htmlFor="lenguaje">JavaScript</label>
        <input
          type="radio"
          id="lenguaje"
          name="lenguaje"
          value="Python"
          onChange={handleChange}
        />
        <label htmlFor="lenguaje">Python</label>
        <input
          type="radio"
          id="lenguaje"
          name="lenguaje"
          value="Java"
          onChange={handleChange}
        />
        <label htmlFor="lenguaje">Java</label>
        <input
          type="radio"
          id="lenguaje"
          name="lenguaje"
          value="HTML"
          onChange={handleChange}
        />
        <label htmlFor="lenguaje">HTML</label>

        <h3>SELECT OPTIONS</h3>
        <select name="colores" id="colores" onChange={handleChange}>
          <option value="Rojo">Rojo</option>
          <option value="Verde">Verde</option>
          <option value="Azul">Azul</option>
        </select>

        <h3>CHECK BOX</h3>
        <input
          type="checkbox"
          name="terminos"
          id="terminos"
          onChange={handleChecked}
        />
        <label htmlFor="terminos">Aceptop terminos y condiciones </label>
      </form>
    </Fragment>
  );
};

export default FormularioHooks;
