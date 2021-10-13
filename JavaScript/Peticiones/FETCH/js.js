(() => {
  const $fetch = document.getElementById("fetch"),
    $fragment = document.createDocumentFragment();
  fetch("https://jsonplaceholder.typicode.com/users")
    .then((res) => (res.ok ? res.json() : Promise.reject(res))) //Aqui en caso de error rechazamos la promesa
    .then((json) => {
      json.forEach((element) => {
        const li = document.createElement("li");
        li.innerHTML = `${element.name} -- ${element.phone}`;
        $fragment.appendChild(li);
      });
      $fetch.appendChild($fragment);
    })
    .catch((err) => console.log("Error " + err.status))
    .finally(() => console.log("Ejecutado con la API Fetch"));
})();

//Usando Async y Await
(() => {
  const $fetch = document.getElementById("fetchaa"),
    $fragment = document.createDocumentFragment();
  const getData = async () => {
    try {
      let res = await fetch("https://jsonplaceholder.typicode.com/users");
      let json = await res.json();

      if (!res.ok) throw { status: res.status };

      json.forEach((element) => {
        const li = document.createElement("li");
        li.innerHTML = `${element.name} -- ${element.phone}`;
        $fragment.appendChild(li);
      });
      $fetch.appendChild($fragment);
    } catch (err) {
      document.write("Error: " + err.status);
    } finally {
      console.log("Ejecutado con la API Fetch + Async");
    }
  };
  getData();
})();
