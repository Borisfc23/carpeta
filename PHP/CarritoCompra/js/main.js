document.addEventListener("DOMContentLoaded", (e) => {
  //cookies
  const cookies = document.cookie.split(";");
  let cookie = null;
  cookies.forEach((item) => {
    if (item.indexOf("item") > -1) {
      cookie = item;
    }
  });

  if (cookie != null) {
    const count = cookie.split("=")[1];
    // console.log(count);
    document.querySelector("#btn-carrito").innerHTML = `(${count}) Carrito`;
  }
});

const bCarrito = document.querySelector("#btn-carrito");
bCarrito.addEventListener("click", (e) => {
  const carritoContainer = document.querySelector("#carrito-container");

  if (carritoContainer.style.display == "") {
    carritoContainer.style.display = "block";
    actualizarCarritoUI();
  } else {
    carritoContainer.style.display = "";
  }
});

function actualizarCarritoUI() {
  fetch(
    "http://localhost/PHP/CarritoCompra/api/carrito/api-carrito.php?action=mostrar"
  )
    .then((response) => response.json())
    .then((data) => {
      //   console.log(data);
      let tablaCont = document.querySelector("#tabla");
      let precioTotal = "";
      let html = "";

      data.items.forEach((element) => {
        html += `
                <div class='fila'>
                    <div class='imagen'>
                        <img src='${element.imagen}' width='80' height='120'/>
                    </div>    

                    <div class='info'>
                        <input type='hidden' value='${element.id}' />
                        <div class='nombre'>${element.nombre}</div>
                        <div>${element.cantidad} items de S/.${element.precio}</div>
                        <div>Sub-Total: S/.${element.subtotal}</div>
                        <div class='botones'><button class='btn-remove'>Remover</button></div>
                    </div>
                </div>`;
      });
      precioTotal = `<p>Total: ${data.info.total}</p>`;
      tablaCont.innerHTML = precioTotal + html;

      document.cookie = `items=${data.info.count}`;
      bCarrito.innerHTML = `(${data.info.count}) Carrito`;

      document.querySelectorAll(".btn-remove").forEach((boton) => {
        boton.addEventListener("click", (e) => {
          const id = boton.parentElement.parentElement.children[0].value;
          removeItemFromCarrito(id);
        });
      });
    });
}

const botones = document.querySelectorAll(".btn-add");
botones.forEach((boton) => {
  const id = boton.parentElement.parentElement.children[0].value;

  boton.addEventListener("click", (e) => {
    addItemCarrito(id);
  });
});

function removeItemFromCarrito(id) {
  fetch(
    "http://localhost/PHP/CarritoCompra/api/carrito/api-carrito.php?action=remove&id=" +
      id
  )
    .then((response) => response.json())
    .then((data) => {
      //   console.log(data);
      actualizarCarritoUI();
    });
}
function addItemCarrito(id) {
  fetch(
    "http://localhost/PHP/CarritoCompra/api/carrito/api-carrito.php?action=add&id=" +
      id
  )
    .then((response) => response.json())
    .then((data) => {
      //   console.log(data);
      actualizarCarritoUI();
    });
}
