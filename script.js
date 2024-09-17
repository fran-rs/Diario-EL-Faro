// Reloj
function updateClock() {
  const now = new Date();
  const hours = now.getHours().toString().padStart(2, "0");
  const minutes = now.getMinutes().toString().padStart(2, "0");
  const seconds = now.getSeconds().toString().padStart(2, "0");
  const clockElement = document.getElementById("clock");

  clockElement.textContent = `${hours}:${minutes}:${seconds}`;
}

// Actualiza el reloj cada segundo
setInterval(updateClock, 1000);

// Inicializa el reloj al cargar la página
updateClock();

// Función para actualizar los contadores de artículos

function updateArticleCounters() {
  const noticiasContainer = document.querySelector(".noticias");
  const deportesContainer = document.querySelector(".deportes");
  const negociosContainer = document.querySelector(".negocios");
  const totalArticles =
    noticiasContainer.children.length +
    deportesContainer.children.length +
    negociosContainer.children.length;

  document.getElementById(
    "noticias-count"
  ).textContent = `Artículos: ${noticiasContainer.children.length}`;
  document.getElementById(
    "deportes-count"
  ).textContent = `Artículos: ${deportesContainer.children.length}`;
  document.getElementById(
    "negocios-count"
  ).textContent = `Artículos: ${negociosContainer.children.length}`;
  document.getElementById(
    "total-articles"
  ).textContent = `Total de artículos: ${totalArticles}`;
}

// Formulario para Agregar un nuevo artículo noticioso

document.addEventListener("DOMContentLoaded", () => {
  const form = document.getElementById("article-form");
  const noticiasContainer = document.querySelector(".noticias");
  const deportesContainer = document.querySelector(".deportes");
  const negociosContainer = document.querySelector(".negocios");

  form.addEventListener("submit", (event) => {
    event.preventDefault(); // esto evita que se envíe  el formulario tradicional

    const title = document.getElementById("article-title").value;
    const content = document.getElementById("article-content").value;
    const category = document.getElementById("article-category").value;

    // Para crear un nuevo artículo

    const newArticle = document.createElement("div");
    newArticle.classList.add("card");

    const articleTitle = document.createElement("h3");
    articleTitle.textContent = title;

    const articleContent = document.createElement("p");
    articleContent.textContent = content;

    newArticle.appendChild(articleTitle);
    newArticle.appendChild(articleContent);

    // Para agregar  un nuevo artículo a la sección que corresponda

    switch (category) {
      case "noticias":
        noticiasContainer.appendChild(newArticle);
        break;

      case "deportes":
        deportesContainer.appendChild(newArticle);
        break;

      case "negocios":
        negociosContainer.appendChild(newArticle);
        break;
    }

    form.reset();

    // Actualiza los contadores después de agregar un artículo
    updateArticleCounters();
  });

  // Inicializa los contadores al cargar la página
  updateArticleCounters();
});

// Formulario de contacto

document.addEventListener("DOMContentLoaded", () => {
  const contactForm = document.getElementById("contact-form");

  contactForm.addEventListener("submit", (event) => {
    event.preventDefault();

    const name = document.getElementById("contact-name").value;
    const message = document.getElementById("contact-message").value;

    alert(`Gracias, ${name}! Hemos recibido tu mensaje: "${message}"`);

    contactForm.reset();
  });
});
