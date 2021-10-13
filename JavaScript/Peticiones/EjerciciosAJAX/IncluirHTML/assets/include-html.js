document.addEventListener("DOMContentLoaded", (e) => {
  const includeHTML = (el, url) => {
    const xhr = new XMLHttpRequest();
    xhr.addEventListener("load", (e) => {
      if (xhr.status >= 200 && xhr.status < 300) {
        //El outerHTML sirve para remplazar un objeto por otro
        el.outerHTML = xhr.responseText;
      } else {
        let message = xhr.statusText || "Error al cargar el archivo";
        el.outerHTML = `<div><p>Error ${xhr.status}: ${message}</p></div>`;
      }
    });
    xhr.open("GET", url);
    xhr.setRequestHeader("Content-type", "text/html;charset=utf-8");
    xhr.send();
  };
  document
    .querySelectorAll("[data-include]")
    .forEach((el) => includeHTML(el, el.getAttribute("data-include")));
});
