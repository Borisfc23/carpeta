import React, { useEffect, useState } from "react";
const Pokemon = ({ name, avatar }) => {
  return (
    <figure>
      <img src={avatar} alt={name} />
      <figcaption>{name}</figcaption>
    </figure>
  );
};
const AjaxHooks = () => {
  const [pokemons, setpokemons] = useState([]);

  useEffect(() => {
    const getPokemons = async (url) => {
      let res = await fetch(url),
        json = await res.json();
      json.results.forEach(async (el) => {
        let res = await fetch(el.url),
          json = await res.json();
        let pokemon = {
          id: json.id,
          name: json.name,
          avatar: json.sprites.front_default,
        }; //En el parentesis se pasa la var de estado
        setpokemons((pokemons) => [...pokemons, pokemon]);
      });
    };
    getPokemons("https://pokeapi.co/api/v2/pokemon");
  }, []);

  //   useEffect(() => {

  //     let url = "https://pokeapi.co/api/v2/pokemon";
  //     fetch(url).then((res) =>
  //       res.json().then((json) =>
  //         json.results.forEach((el) =>
  //           fetch(el.url)
  //             .then((res) => res.json())
  //             .then((poke) => {
  //               let pokemon = {
  //                 id: poke.id,
  //                 name: poke.name,
  //                 avatar: poke.sprites.front_default,
  //               }; //En el parentesis se pasa la var de estado
  //               setpokemons((pokemons) => [...pokemons, pokemon]);
  //             })
  //         )
  //       )
  //     );
  //   }, []);
  return (
    <div>
      <h2>AJAX ASYNX CON HOOKS</h2>
      {pokemons.length === 0 ? (
        <h3>Cargando</h3>
      ) : (
        pokemons.map((el) => (
          <Pokemon key={el.id} name={el.name} avatar={el.avatar} />
        ))
      )}
      <hr />
    </div>
  );
};

export default AjaxHooks;
