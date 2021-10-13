import React, { useState } from "react";

function EstadoHijo({ prop }) {
  return (
    <div>
      <p>Contador Hijo: {prop}</p>
    </div>
  );
}
const Estado = () => {
  let [state, setstate] = useState(0);
  setInterval(() => {
    setstate((state = state + 1));
  }, 1000);
  return (
    <div>
      <h2>ESTADOS</h2>
      {/* <p>Contador: {state}</p> */}
      {/* <EstadoHijo prop={state} /> */}
      <hr />
    </div>
  );
};

export default Estado;
