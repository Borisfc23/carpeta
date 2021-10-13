(() => {
  const $axios = document.getElementById("axios"),
    $fragment = document.createDocumentFragment();
  axios
    .get("https://jsonplaceholder.typicode.com/users")
    .then((res) => {
      let json = res.data;
      json.forEach((element) => {
        const li = document.createElement("li");
        li.innerHTML = `${element.name} -- ${element.phone}`;
        $fragment.appendChild(li);
      });
      $axios.appendChild($fragment);
    })
    .catch((err) => console.log(err))
    .finally(console.log("Se ejecuto con libreria Axios"));
})();

//AXIOS con Async - await
(() => {
  const $axios = document.getElementById("axiosaa"),
    $fragment = document.createDocumentFragment();
  const getData = async () => {
    try {
      let res = await axios.get("https://jsonplaceholder.typicode.com/users");
      let json = await res.data;
      json.forEach((element) => {
        const li = document.createElement("li");
        li.innerHTML = `${element.name} -- ${element.phone}`;
        $fragment.appendChild(li);
      });
      $axios.appendChild($fragment);
    } catch (error) {
      console
        .log(error)
        .finally(console.log("Ejecutado con Axios y Async - Await"));
    }
  };
  getData();
})();
