document.getElementById("btnEnviar").addEventListener("click", function () {
  nuevoTodo();
});

function nuevoTodo() {
  var todo = document.getElementById("todo");
  var msj = document.getElementById("message");
  var header = "todo=" + todo.value;
  const xmlhttp = new XMLHttpRequest();

  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState === XMLHttpRequest.DONE && xmlhttp.status === 200) {
      //La solicitud fue exitosa
      cargarTodos();
    } else {
      let message = xmlhttp.statusText || "Ocurrio un Problema en Nuevo Todo";
      msj.textContent = ` ${message}`;
    }
  };
  xmlhttp.open("POST", "nuevo-todo.php", true);
  xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  xmlhttp.send(header);
}

function cargarTodos() {
  const xmlhttp = new XMLHttpRequest();
  var msj = document.getElementById("message");
  xmlhttp.onreadystatechange = function () {
    if (xmlhttp.readyState === XMLHttpRequest.DONE && xmlhttp.status === 200) {
      document.getElementById("mostrar-todo-container").innerHTML =
        this.responseText;
    } else {
      let message = xmlhttp.statusText || "Ocurrio un Problema Cargar Todo";
      msj.innerHTML = ` ${message}`;
    }
  };
  xmlhttp.open("GET", "mostrar-todos.php", true);
  xmlhttp.send();
}
