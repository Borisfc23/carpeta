import React, { Component } from "react";

function Pokemon({ avatar, name }) {
  return (
    <figure>
      <img src={avatar} alt={name} />
      <figcaption>{name}</figcaption>
    </figure>
  );
}
export default class AjaxApi extends Component {
  state = {
    pokemons: [],
  };
  componentDidMount() {
    let url = "https://pokeapi.co/api/v2/pokemon";

    fetch(url)
      .then((res) => res.json())
      .then((json) => {
        json.results.forEach((el) => {
          fetch(el.url)
            .then((res) => res.json())
            .then((json) => {
              let pokemon = {
                id: json.id,
                name: json.name,
                avatar: json.sprites.front_default,
              };
              //Con el spread juntas el array  vacio con el otro
              let pokemones = [...this.state.pokemons, pokemon];
              this.setState({ pokemons: pokemones });
            });
        });
      });
  }
  render() {
    return (
      <>
        <h2>PETICION ASINCRONAS EN COMPONENTE</h2>
        {this.state.pokemons.length === 0 ? (
          <h3>Loading</h3>
        ) : (
          this.state.pokemons.map((el) => (
            <Pokemon key={el.id} name={el.name} avatar={el.avatar} />
          ))
        )}
      </>
    );
  }
}
