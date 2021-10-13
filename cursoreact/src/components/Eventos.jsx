import React, { useState } from "react";

const Eventos = ({ title }) => {
  const [state, setstate] = useState(0);
  const sumar = () => {
    setstate(state + 1);
  };
  const restar = () => {
    setstate(state - 1);
  };
  return (
    <div>
      <h2>Eventos</h2>
      <p>{state}</p>
      <nav>
        <button onClick={sumar}>+</button>
        <button onClick={restar}>-</button>
      </nav>
      <p>{title}</p>
      <hr />
    </div>
  );
};
Eventos.defaultProps = {
  title: "Contador de Click",
};

export default Eventos;
