// app/views/home.php

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,500;0,800;1,400&display=swap"
      rel="stylesheet"
    />
    <title>El Faro</title>
  </head>
  <body>
    <!--Encabezado con logo-->
    <header>
      <img src="./img/faro.png" alt="Logo de El Faro" class="logo" />
      <h1>El Faro</h1>
      <div id="clock" class="clock"></div>
    </header>
    <!--Navegación-->
    <nav>
      <ul class="navegacion">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Deporte</a></li>
        <li><a href="#">Negocios</a></li>
      </ul>
    </nav>
    <!--Contenido Principal-->
    <main class="main-container">
      <!--Sección Contador de Noticias-->
      <section>
        <h2>Noticias</h2>
        <!-- Contador de noticias -->
        <p id="noticias-count">Artículos: 0</p>
        <div class="noticias">
          <div class="card">
            <h3>Crisis en Salud Pública.</h3>
            <p>
              La Fenats Nacional ha convocado a un paro indefinido en todo
              Chile, comenzando el 27 de agosto de 2024, debido a la falta de
              cumplimiento de compromisos por parte del gobierno. La
              organización denuncia recortes en los recursos asignados al sector
              salud, afectando especialmente a trabajadores y pacientes en los
              hospitales públicos.
            </p>
          </div>
          <div class="card">
            <h3>Seguridad En Santiago.</h3>
            <p>
              El gobierno chileno implementará un plan de seguridad en Santiago
              tras un aumento en delitos violentos. Se fortalecerá la presencia
              policial en las comunas con mayores índices de criminalidad, como
              Recoleta y La Pintana.
            </p>
          </div>

          <div class="card">
            <h3>Crisis Hídrica en el Norte.</h3>
            <p>
              La región de Atacama enfrenta una grave crisis hídrica, con
              embalses casi vacíos y una sequía que afecta la agricultura local.
              El gobierno ha decretado medidas de emergencia, incluyendo la
              distribución de agua en camiones aljibe para comunidades rurales
              más afectadas.
            </p>
          </div>
        </div>
        <!-- Sección Audio y VIdeo -->
        <div>
          <video controls>
            <source src="" />
            <p>Tu navegador no soporta el video</p>
          </video>
        </div>
        <div>
          <audio controls>
            <source src="" />
            <p>Este formato no es compatible por el navegador</p>
          </audio>
        </div>

        <!-- Sección Deportes -->

        <h2>Deportes</h2>
        <!-- Sección Contador de Deportes -->
        <p id="deportes-count">Artículos: 0</p>

        <div class="deportes">
          <div class="card">
            <h3>Selección Chilena en las Eliminatorias.</h3>
            <p>
              Ricardo Gareca, técnico de la Roja, ha dado a conocer la nómina
              para los próximos partidos de eliminatorias contra Argentina y
              Bolivia. Destacan varias sorpresas y la ausencia de figuras clave
              como Alexis Sánchez y Claudio Bravo, este último debido a que aún
              no encuentra equipo.
            </p>
          </div>

          <div class="card">
            <h3>Críticas en la U por la nómina de la Roja.</h3>
            <p>
              Gabriel Castellón, arquero de la Universidad de Chile, expresó su
              sorpresa por la falta de jugadores de su equipo en la selección
              nacional, a pesar de que la U lidera el campeonato local.
              Castellón sugirió que se podría estar subestimando el rendimiento
              del equipo en el torneo nacional.
            </p>
          </div>

          <div class="card">
            <h3>Delegación Chilena para los Juegos Paralímpicos.</h3>
            <p>
              ha confirmado a los atletas que competirán en los Juegos
              Paralímpicos de París 2024. Entre ellos se encuentran deportistas
              de powerlifting, taekwondo y tenis de mesa, quienes se preparan
              para representar al país en diversas categorías durante el mes de
              septiembre.
            </p>
          </div>
        </div>
        <!-- Sección Negocios -->
        <h2>Negocios</h2>

        <!-- Sección Contador de Negocios -->
        <p id="negocios-count">Artículos: 0</p>

        <div class="negocios">
          <div class="card">
            <h3>Suspensión En Huachipato.</h3>
            <p>
              La planta de Huachipato en Talcahuano suspendió sus operaciones
              debido a las sobretasas al acero chino y la intensificación del
              dumping. Esta situación refleja las dificultades económicas en la
              industria siderúrgica del país.
            </p>
          </div>
          <div class="card">
            <h3>Caída del dólar en Chile.</h3>
            <p>
              Tras el discurso de Jerome Powell, presidente de la Reserva
              Federal de EE.UU., el dólar en Chile cayó a su nivel más bajo en
              más de dos meses, cerrando en $908. Esta situación se debe a las
              expectativas de cambios en la política monetaria estadounidense.
            </p>
          </div>
          <div class="card">
            <h3>Ciberataques en aumento.</h3>
            <p>
              Empresas chilenas están enfrentando un aumento significativo en
              ciberataques, lo que ha llevado a una mayor demanda de servicios
              de ciberseguridad. El sector tecnológico en Chile está viendo un
              crecimiento en la inversión en infraestructura digital para
              proteger datos sensibles.
            </p>
          </div>
        </div>
      </section>

      <!-- Formulario para agregar nuevos artículos -->

      <section id="add-article">
        <h2>Añadir Nuevo Artículo</h2>
        <form id="article-form">
          <label for="article-title">Título</label>
          <input type="text" id="article-title" name="title" required />

          <label for="article-content">Contenido</label>
          <textarea id="article-content" name="content" rows="4" required></textarea>

          <label for="article-category">Categoría</label>
          <select name="category" id="article-category" required>
            <option value="noticias">Noticias</option>
            <option value="deportes">Deportes</option>
            <option value="negocios">Negocios</option>
          </select>

          <button type="submit">Agregar Artículo</button>
        </form>
      </section>

    <!-- Formulario de contacto -->
 
    <section id="contact-form">
      <h2>Contacto</h2>
      <form id="contact-form">
        <label for="contact-name">Nombre</label>
        <input type="text" id="contact-name" name="name" required />

        <label for="contact-message">Mensaje</label>
        <textarea name="message" id="contact-message" rows="4" required ></textarea>

        <button type="submit">Enviar</button>

      </form>
      
    </section>

    </main>
    <!-- Pie de Página -->
    <footer>
      <!-- Total de artículos-->
      <p id="total-articles">Total de artículos: 0</p>
      <p>© 2024 El Faro. Todos los derechos reservados.</p>
    </footer>
    <!-- Enlace al archivo JavaScript -->
    <script src="script.js"></script>
  </body>
</html>
