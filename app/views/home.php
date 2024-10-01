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
        rel="stylesheet" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>El Faro</title>
</head>

<body>
    <!-- Encabezado con logo -->
    <header>
        <img src="./img/faro.png" alt="Logo de El Faro" class="logo" />
        <h1>El Faro</h1>
        <div id="clock" class="clock"></div>
    </header>
    <!-- Navegación -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav">
            <li class="nav-item"><a class="nav-link" href="#">Inicio</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Deporte</a></li>
            <li class="nav-item"><a class="nav-link" href="#">Negocios</a></li>
            <li class="nav-item"><a class="nav-link" href="#add-article">Añadir Artículo</a></li>
            <li class="nav-item"><a class="nav-link" href="#contact-form">Contacto</a></li>
            <li class="nav-item"><a class="nav-link" href="#register-form">Registrar</a></li>
        </ul>
    </nav>
    <!-- Contenido Principal -->
    <main class="main-container">
        <!-- Sección Contador de Noticias -->
        <section>
            <h2>Noticias</h2>
            <p id="noticias-count">Artículos: 0</p>
            <div class="noticias">
                <div class="card">
                    <h3>Crisis en Salud Pública.</h3>
                    <p>La Fenats Nacional ha convocado a un paro indefinido en todo Chile, comenzando el 27 de agosto de 2024...</p>
                </div>
                <div class="card">
                    <h3>Seguridad En Santiago.</h3>
                    <p>El gobierno chileno implementará un plan de seguridad en Santiago tras un aumento en delitos violentos...</p>
                </div>
                <div class="card">
                    <h3>Crisis Hídrica en el Norte.</h3>
                    <p>La región de Atacama enfrenta una grave crisis hídrica, con embalses casi vacíos y una sequía que afecta la agricultura local...</p>
                </div>
            </div>
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
            <p id="deportes-count">Artículos: 0</p>
            <div class="deportes">
                <div class="card">
                    <h3>Selección Chilena en las Eliminatorias.</h3>
                    <p>Ricardo Gareca, técnico de la Roja, ha dado a conocer la nómina para los próximos partidos de eliminatorias...</p>
                </div>
                <div class="card">
                    <h3>Críticas en la U por la nómina de la Roja.</h3>
                    <p>Gabriel Castellón, arquero de la Universidad de Chile, expresó su sorpresa por la falta de jugadores de su equipo...</p>
                </div>
                <div class="card">
                    <h3>Delegación Chilena para los Juegos Paralímpicos.</h3>
                    <p>Ha confirmado a los atletas que competirán en los Juegos Paralímpicos de París 2024...</p>
                </div>
            </div>
            <!-- Sección Negocios -->
            <h2>Negocios</h2>
            <p id="negocios-count">Artículos: 0</p>
            <div class="negocios">
                <div class="card">
                    <h3>Suspensión En Huachipato.</h3>
                    <p>La planta de Huachipato en Talcahuano suspendió sus operaciones debido a las sobretasas al acero chino...</p>
                </div>
                <div class="card">
                    <h3>Caída del dólar en Chile.</h3>
                    <p>Tras el discurso de Jerome Powell, presidente de la Reserva Federal de EE.UU., el dólar en Chile cayó...</p>
                </div>
                <div class="card">
                    <h3>Ciberataques en aumento.</h3>
                    <p>Empresas chilenas están enfrentando un aumento significativo en ciberataques...</p>
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
            <form method="POST" action="path_to_contact_controller">
                <label for="contact-name">Nombre</label>
                <input type="text" id="contact-name" name="name" required />

                <label for="contact-message">Mensaje</label>
                <textarea name="message" id="contact-message" rows="4" required></textarea>

                <button type="submit">Enviar</button>
            </form>
        </section>

        <!-- Formulario de registro -->
        <section id="register-form">
            <h2>Registrar Usuario</h2>
            <form method="POST" action="path_to_register_controller">
                <label for="register-name">Nombre</label>
                <input type="text" id="register-name" name="name" required />

                <label for="register-email">Correo Electrónico</label>
                <input type="email" id="register-email" name="email" required />

                <label for="register-password">Contraseña</label>
                <input type="password" id="register-password" name="password" required />

                <button type="submit">Registrar</button>
            </form>
        </section>
    </main>
    <!-- Pie de Página -->
    <footer>
        <p id="total-articles">Total de artículos: 0</p>
        <p>© 2024 El Faro. Todos los derechos reservados.</p>
    </footer>
    <!-- Enlace a Bootstrap y archivo JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.7/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="script.js"></script>
</body>

</html>