var registrar = document.getElementById("registrar");
var resultado = document.getElementById("resultado");
var frm = document.getElementById("frm");

listarProductos();

function listarProductos(busqueda) {
  fetch("listar.php", {
    method: "POST",
    body: busqueda,
  })
    .then((response) => response.text())
    .then((response) => {
      resultado.innerHTML = response;
    });
}

registrar.addEventListener("click", () => {
  fetch("registrar.php", {
    method: "POST",
    body: new FormData(frm),
  })
    .then((response) => response.text())
    .then((response) => {
      if (response == "ok") {
        Swal.fire({
          icon: "success",
          title: "Registrado Exitoso",
          showConfirmButton: false,
          timer: 1200,
        });
        listarProductos();
        frm.reset();
      } else if (response == "modificado") {
        Swal.fire({
          icon: "success",
          title: "Actualizacion Exitosa",
          showConfirmButton: false,
          timer: 1000,
        });
        listarProductos();
        idp.value = "";
        frm.reset();
        registrar.value = "Registrar";
      } else {
        Swal.fire({
          icon: "error",
          title: "Registro Fallido!!!",
          showConfirmButton: false,
          timer: 1000,
        });
      }
    });
});

function Eliminar(id) {
  Swal.fire({
    title: "Are you sure?",
    text: "You won't be able to revert this!",
    icon: "warning",
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Yes, delete it!",
  }).then((result) => {
    if (result.isConfirmed) {
      fetch("eliminar.php", {
        method: "POST",
        body: id,
      })
        .then((response) => response.text())
        .then((response) => {
          if (response === "ok") {
            Swal.fire({
              icon: "success",
              title: "Eliminado con Exito",
              showConfirmButton: false,
              timer: 1000,
            });
            listarProductos();
          }
        });
    }
  });
}

function Editar(id) {
  fetch("editar.php", {
    method: "POST",
    body: id,
  })
    .then((response) => response.json())
    .then((response) => {
      (idp.value = response.id),
        (codigo.value = response.codigo),
        (producto.value = response.producto),
        (precio.value = response.precio),
        (cantidad.value = response.cantidad);
      registrar.value = "Actualizar";
    });
}

buscar.addEventListener("keyup", () => {
  const valor = buscar.value;
  if (valor == "") {
    listarProductos();
  } else {
    listarProductos(valor);
  }
});
