(() => {
  const xhr = new XMLHttpRequest(),
    $xhr = document.getElementById("xhr"),
    $fragment = document.createDocumentFragment();

  xhr.addEventListener("load", (e) => {
    if (xhr.status >= 200 && xhr.status <= 299) {
      let json = JSON.parse(xhr.responseText);      

      json.forEach((element) => {
        const $li = document.createElement("li");
        $li.innerHTML = `${element.name} -- ${element.email} -- ${element.phone}---- ${element.address.street}`;
        $fragment.appendChild($li);
      });
      $xhr.appendChild($fragment);
    } else {
      let message = xhr.statusText || "Ocurrio un Error";
      $xhr.innerHTML = `Error ${xhr.status}: ${message}`;
      console.log("error");
    }
  });

  xhr.open("GET", "https://jsonplaceholder.typicode.com/users"); //Especificas tipo de peticion get, post, put, delete y luego la URL
  xhr.send();
})();
