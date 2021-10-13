import React, { Fragment, useState } from "react";
//La comunicacion entre componentes se da a traves de propiedades(props)
const ComunicacionComponente = () => {
  const [state, setstate] = useState(0);
  const incrementarContador = () => {
    setstate(state + 1);
  };
  return (
    <div>
      <h2>COMUNICACION COMPONENTES</h2>
      <p>{state}</p>
      <Hijo
        incrementarContador={incrementarContador}
        mensaje="Mensaje para el hijo 1"
      />
      <Hijo
        incrementarContador={incrementarContador}
        mensaje="Mensaje para el hijo 2"
      />
      <hr />
    </div>
  );
};
function Hijo({ mensaje, incrementarContador }) {
  return (
    <Fragment>
      <h3>{mensaje}</h3>
      <button onClick={incrementarContador}>+</button>
    </Fragment>
  );
}
export default ComunicacionComponente;
