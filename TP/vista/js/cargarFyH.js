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

// Cargar el header dentro del body, al principio
loadComponent("../estructura/header.html", "body", "afterbegin");

// Cargar el footer dentro del body, al final
loadComponent("../estructura/footer.html", "body", "beforeend");
