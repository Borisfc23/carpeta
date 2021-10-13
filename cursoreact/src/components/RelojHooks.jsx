import React, { Fragment, useEffect, useState } from "react";
const Reloj = ({ hora }) => {
  return <h3>{hora}</h3>;
};
const RelojHooks = () => {
  const [hora, sethora] = useState(new Date().toLocaleTimeString());
  const [visible, setVisible] = useState(false);

  useEffect(() => {
    let temporizador;
    if (visible) {
      temporizador = setInterval(() => {
        sethora(new Date().toLocaleTimeString());
      }, 1000);
    } else {
      clearInterval(temporizador);
    }

    return () => {
      console.log("Fase de desmontaje del Reloj");
    };
  }, [visible]);

  return (
    <Fragment>
      <h2>RELOJ CON HOOKS</h2>
      {visible && <Reloj hora={hora} />}
      <button onClick={() => setVisible(true)}>Iniciar</button>
      <button onClick={() => setVisible(false)}>Detener</button>
      <hr />
    </Fragment>
  );
};
export default RelojHooks;
