import React, { useState } from "react";
import data from "../helpers/data.json";

const ElementosLista = ({ nombre, url }) => {
  return (
    <li>
      <a href={url} target="_blank">
        {nombre}
      </a>
    </li>
  );
};
const RenderizadoElementos = () => {
  const [state, setstate] = useState({
    seasons: ["Primavera", "Verano", "Otoño", "Invierno"],
  });
  console.log(data);
  return (
    <div>
      <h2>RENDERIZADO DE ELEMENTOS</h2>
      <ol>
        {state.seasons.map((estacion) => (
          <li>{estacion}</li>
        ))}
      </ol>
      <h3>Frameworks Frontend JS</h3>
      <ul>
        {data.frameworks.map((elemento) => (
          <ElementosLista
            key={elemento.id}
            nombre={elemento.name}
            url={elemento.web}
          />
        ))}
      </ul>
      <hr />
    </div>
  );
};

export default RenderizadoElementos;
