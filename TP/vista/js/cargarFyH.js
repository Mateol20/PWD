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

// Cargar header
loadComponent("../estructura/header.html", "body", "afterbegin");
document.head.innerHTML +=
  '<link rel="stylesheet" href="../css/style_header.css">';

// Cargar footer
loadComponent("../estructura/footer.html", "body", "beforeend");
document.head.innerHTML +=
  '<link rel="stylesheet" href="../css/style_footer.css">';
