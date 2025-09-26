// ARCHIVO: js/cargarFyH.js (CORREGIDO)

function loadComponent(filePath, targetSelector, position) {
  fetch(filePath)
    .then((response) => response.text())
    .then((html) => {
      const target = document.querySelector(targetSelector);
      if (target) {
        target.insertAdjacentHTML(position, html);
      } else {
        console.error(
          `Elemento con selector '${targetSelector}' no encontrado.`
        );
      }
    })
    .catch((error) => console.error("Error al cargar el componente:", error));
}

function loadCSS(filePath) {
  const link = document.createElement("link");
  link.rel = "stylesheet";
  link.href = filePath;
  document.head.appendChild(link);
}

// Cargar header
loadComponent("../estructura/header.html", "body", "afterbegin");

loadCSS("../css/style_header.css");

// Cargar footer
loadComponent("../estructura/footer.html", "body", "beforeend");

loadCSS("../css/style_footer.css");
