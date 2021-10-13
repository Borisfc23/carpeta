import React from "react";
import "./Estilos.css";
// import "./Estilo.scss";
import moduleStyles from "./Estilos.module.css";
const EstilosCSS = () => {
  let myStyles = {
    border: "1px solid #ffffff",
    borderRadius: ".5rem",
    margin: "2rem auto",
    maxWidth: "max-content",
  };
  return (
    <section className="estilos">
      <h2>ESTILOS CSS EN React</h2>
      <h3 className="bg-react">Estilos en hoja CSS externa</h3>
      <h3 style={{ background: "#777777", color: "yellow" }}>
        Estilos en Linea
      </h3>
      <h3 style={myStyles}>Estilos con Objetos</h3>
      <h3 className={moduleStyles.error}>Estilos con Modulos</h3>
      <h3 className={moduleStyles.success}>Estilos con Modulos</h3>
      {/* falta instalar sass */}
      <h3 className="bg-sass">Estilos con SASS</h3>
    </section>
  );
};

export default EstilosCSS;
