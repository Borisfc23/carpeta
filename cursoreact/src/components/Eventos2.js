import React, { Component } from "react";

export class Eventos2 extends Component {
  state = {
    contador: 0,
  };
  restar = (e) => {
    this.setState({
      contador: this.state.contador - 1,
    });
  };
  sumar = (e) => {
    this.setState({
      contador: this.state.contador + 1,
    });
  };
  render() {
    return (
      <div>
        <h2>EVENTOS & PROPERTY INITIAL CON ES7</h2>
        <p>{this.state.contador}</p>
        <nav>
          <button onClick={this.sumar}>+</button>
          <button onClick={this.restar}>-</button>
        </nav>
        <hr />
      </div>
    );
  }
}
//Eventos personalizados
const Boton = ({ mybotononClick }) => {
  return <button onClick={mybotononClick}>Boton hecho componente</button>;
};
export class MasSobreEventos extends Component {
  handleClick = (mensaje) => {
    alert(mensaje);
  };
  render() {
    return (
      <div>
        <h2>Mas sobre eventos</h2>
        <button onClick={() => this.handleClick("Hola como estas")}>
          Saludar
        </button>
        <Boton mybotononClick={() => this.handleClick("Hola como estas")} />
        <hr />
      </div>
    );
  }
}
