import React, { useState } from "react";

const Login = () => {
  return (
    <div>
      <h3>Login</h3>
    </div>
  );
};
const Logout = () => {
  return (
    <div>
      <h3>Logout</h3>
    </div>
  );
};
const RenderizadoCondicional = () => {
  let [state, setstate] = useState(true);
  const handleChange = () => {
    setstate((state = false));
  };
  const handleChange2 = () => {
    setstate((state = true));
  };
  return (
    <div>
      <h2>RENDERIZADO CONDICIONAL</h2>
      <p>{state ? <Login /> : <Logout />}</p>
      <button onClick={handleChange}>Entrar</button>
      <button onClick={handleChange2}>Salir</button>
      <hr />
    </div>
  );
};

export default RenderizadoCondicional;
