document.getElementById("guardar").addEventListener("click", () => {
  agregarTodo();
});

function cargarTodo() {
  let xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.status == 200 && xhr.readyState == 4) {
      document.getElementById("container-todo").innerHTML = xhr.responseText;
    }
  };
  xhr.open("GET", "mostrar-todo.php");
  xhr.send();
}

function agregarTodo() {
  var texto = document.getElementById("texto");
  var header = "texto=" + texto.value;
  var xhr = new XMLHttpRequest();
  xhr.onreadystatechange = () => {
    if (xhr.status == 200 && xhr.readyState == 4) {
      cargarTodo();
    }
  };
  xhr.open("POST", "nuevo-todo.php");
  xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
  xhr.send(header);
}
