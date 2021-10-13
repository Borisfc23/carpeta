import React from "react";
import PropTypes from "prop-types";
//Pasar propiedades sin destructurar
// const Propiedades = (props) => {
//   return <div>{props.porDefecto}</div>;
// };

const Propiedades = ({
  porDefecto,
  autor,
  cadena,
  numero,
  boleano,
  arreglo,
  objeto,
  elementoReact,
  funcion,
  componenteReact,
}) => {
  return (
    <div>
      <h2>PROPIEDADES</h2>
      {porDefecto} realizado por {autor}
      <ul>
        <li>{cadena}</li>
        <li>{numero}</li>
        <li>{boleano ? "true" : "false"}</li>
        {arreglo.map((val) => (
          <li>{val}</li>
        ))}
        <li>
          {objeto.nombre} - {objeto.email}
        </li>
        <li>{elementoReact}</li>
        <li>{funcion(2)}</li>
        <li>{arreglo.map(funcion).join(", ")}</li>
        <li>{componenteReact}</li>
      </ul>
      <hr />
    </div>
  );
};

//Estas son propiedades por defecto
Propiedades.defaultProps = {
  porDefecto: "Propiedad por Defecto!!!",
  autor: "Boris Flores",
};

Propiedades.propTypes = {
  //Especificar el tipo de dato
  cadena: PropTypes.string,
  //Especificar k se requiere la propiedad
  numero: PropTypes.number.isRequired,
};

export default Propiedades;
