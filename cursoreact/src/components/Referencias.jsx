import React, { useRef } from "react";

const Referencias = () => {
  //   let refMenu = createRef();//para componente de clase
  let refMenu = useRef();
  let refMenuBtn = useRef();
  //Codigo con uso de referencia
  const handleToggleMenu = (e) => {
    if (refMenuBtn.current.textContent === "Menu") {
      refMenuBtn.current.textContent = "Cerrar";
      refMenu.current.style.display = "block";
    } else {
      refMenuBtn.current.textContent = "Menu";
      refMenu.current.style.display = "none";
    }
  };
  //Codigo con solo js
  //   const handleToggleMenu = (e) => {
  //     const $menu = document.getElementById("menu");
  //     if (e.target.textContent === "Menu") {
  //       e.target.textContent = "Cerrar";
  //       $menu.style.display = "block";
  //     } else {
  //       e.target.textContent = "Menu";
  //       $menu.style.display = "none";
  //     }
  //   };
  return (
    <div>
      <h2>MANEJO DOM CON REFERENCIAS(useRef)</h2>
      <button id="menu-btn" ref={refMenuBtn} onClick={handleToggleMenu}>
        Menu
      </button>
      <nav id="menu" ref={refMenu} style={{ display: "none" }}>
        <a href="#">Seccion 1</a>
        <br />
        <a href="#">Seccion 2</a>
        <br />
        <a href="#">Seccion 3</a>
        <br />
        <a href="#">Seccion 4</a>
        <br />
        <a href="#">Seccion 5</a>
      </nav>
      <hr />
    </div>
  );
};

export default Referencias;
