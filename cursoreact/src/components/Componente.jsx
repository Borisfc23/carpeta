import React from "react";

//Pasamos las propiedades ({msg})
const Componente = ({ msg }) => {
  return (
    <div>
      <p>Soy un componente y me llamaron ..... {msg}</p>
      <hr />
    </div>
  );
};

export default Componente;

//Son 2 tipos, componente de clase y funcional, el funcional es con hooks
