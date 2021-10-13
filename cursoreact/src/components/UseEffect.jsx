import React, { Fragment, useEffect, useState } from "react";

const UseEffect = () => {
  const [scrollY, setScrollY] = useState(0);
  useEffect(() => {
    //Esta fase solo se da al inicio cuando se recarga la pagina, en este no se coloca la dependencia[]
    console.log("Fase de Montaje");
  }, []);

  useEffect(() => {
    //Esta fase se actualiza ante los cambios de estado de scrollY
    console.log("Fase de actualizacion");
    const detectarScroll = () => {
      setScrollY(window.pageYOffset);
    };

    window.addEventListener("scroll", detectarScroll);
  }, [scrollY]);
  useEffect(() => {
    return () => {
      console.log("Fase de Desmontaje");
    };
  });
  return (
    <Fragment>
      <h2>HOOKS-USEEFFECT Y CICLO DE VIDA</h2>
      <p>ScrollY del Navegador: {scrollY}px</p>
      <hr />
    </Fragment>
  );
};

export default UseEffect;
