// ARCHIVO: js/cargarFyH.js (CON RUTAS ABSOLUTAS AL PROYECTO)

function loadComponent(filePath, targetSelector, position) {
    fetch(filePath)
        .then(response => {
            if (!response.ok) {
                // Se cambió el mensaje para ser más explícito con la ruta que falló
                throw new Error(`HTTP error! status: ${response.status} for file: ${filePath}`);
            }
            return response.text();
        })
        .then(html => {
            const target = document.querySelector(targetSelector);
            if (target) {
                target.insertAdjacentHTML(position, html);
                console.log(`Componente '${filePath}' cargado con éxito en '${targetSelector}'.`);
            } else {
                console.error(`Error: Elemento con selector '${targetSelector}' no encontrado para cargar '${filePath}'.`);
            }
        })
        .catch(error => console.error("Error al cargar el componente:", error));
}

function loadCSS(filePath) {
    const link = document.createElement("link");
    link.rel = "stylesheet";
    link.href = filePath; // La ruta ya es absoluta desde la raíz del proyecto
    link.onload = () => console.log(`CSS '${filePath}' cargado con éxito.`);
    link.onerror = () => console.error(`Error al cargar CSS '${filePath}'.`); // Añadido manejo de error para CSS
    document.head.appendChild(link);
}

// ======================================================================
// Lógica de Carga Principal
// ======================================================================

// Determina la base URL del proyecto (asumiendo que TP es el directorio base)
// Esto es para que las rutas siempre sean correctas desde la raíz del servidor.
// Si tu proyecto está en http://localhost/TP/, basePath será /TP/
// Es importante que este valor coincida con la forma en que accedes a tu proyecto.
const basePath = window.location.pathname.substring(0, window.location.pathname.indexOf("/TP/") + 4);

async function initializePageComponents() {
    try {
        // Cargar CSS del header
        loadCSS(`${basePath}vista/css/style_header.css`);
        // Cargar HTML del header
        await loadComponent(`${basePath}vista/estructura/header.html`, "body", "afterbegin");

        // Cargar CSS del footer
        loadCSS(`${basePath}vista/css/style_footer.css`);
        // Cargar HTML del footer
        await loadComponent(`${basePath}vista/estructura/footer.html`, "body", "beforeend");

        console.log("Todos los componentes de la página se han inicializado.");

    } catch (error) {
        console.error("Hubo un error en la inicialización de los componentes:", error);
    }
}

document.addEventListener("DOMContentLoaded", initializePageComponents);