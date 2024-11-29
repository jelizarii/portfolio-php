<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Personal</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light text-dark">
<?php include 'mostrar_proyectos.php'; ?>
    <!-- Barra de Navegación -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Mi Portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary rounded-pill mx-2" href="#sobre-mi">Sobre Mí</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary rounded-pill mx-2" href="#proyectos">Proyectos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link btn btn-outline-primary rounded-pill mx-2" href="#contacto">Contacto</a>
                </li>
            </ul>
            <form class="form-inline ml-auto">
                <input class="form-control mr-sm-2" type="search" id="search" placeholder="Buscar" aria-label="Buscar">
                <button class="btn btn-outline-success my-2 my-sm-0" type="button" id="search-btn">Buscar</button>
            </form>
        </div>
    </nav>

    <!-- Secciones -->
    <div class="container mt-5">
        <!-- Sobre Mí -->
        <section id="sobre-mi" class="my-5">
            <h1>Sobre Mí</h1>
            <p>¡Hola! Soy Javier Elizari, estudiante de Administración de Sistemas Informáticos en Red.</p>
            <p>Desde pequeño he estado "trasteando" con cacharros, supongo que me viene de familia pues mis dos tios son también informáticos y desde crío me inculcaron esa mosca que tenemos los aficionados a la tecnología detras de la oreja diciéndonos que intentemos entender como funciona todo.</p>
            <p>Actualmente me encuentro cursando 2 de ASIR y estoy deseando entrar ya en la empresa, pues el grado es importante para aprender unas bases y un modo de funcionamiento nuevo, pero como considero que más se aprende es haciendo, estampándote contra una pared y volviendo a buscar la forma de superarla.</p>
        </section>

        <!-- Proyectos -->
        <section id="proyectos" class="my-5" style="display:none;">
            <h1>Proyectos</h1>
            <div class="card-deck">
                <div class="card" data-toggle="collapse" data-target="#proyecto1">
                    <div class="card-body">
                        <h5 class="card-title">DDA (Dispositivo De Ayuda)</h5>
                        <div id="proyecto1" class="collapse">
                            <p class="card-text">Con motivo del proyecto I3 impulsado por Cuatrovientos y Salesianos, mi grupo y yo desarrollamos una plataforma basada en arduino que tenía como fín el ayudar a personas que empiezan a presentar problemas de memoria a recordarles tareas diarias, pudiendo programar las mismas, la repetición, el tipo...</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-toggle="collapse" data-target="#proyecto2">
                    <div class="card-body">
                        <h5 class="card-title">Comedor social Paris365</h5>
                        <div id="proyecto2" class="collapse">
                            <p class="card-text">Fui voluntario unos años en el comedor social Paris 365 y considero que ha sido una de las experiencias más enriquecedoras a nivel personal que he vivido en los últimos años. En el comedor tenía la función de atender "en barra" a los usuarios, pero de vez en cuando pasaba también a la cocina a preparar algo, pues era de los pocos chavales que sabían cocinar a esa edad.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-toggle="collapse" data-target="#proyecto3">
                    <div class="card-body">
                        <h5 class="card-title">Compra-venta consolas</h5>
                        <div id="proyecto3" class="collapse">
                            <p class="card-text">Actualmente me estoy dedicando a comprar consolas antiguas estropeadas, arreglarlas y posteriormente revenderlas. Es un mercado sorprendentemente poco explorado y a día de hoy hay una gran demanda, pues a no ser que sea emulando (cosa que la mayor parte de la población que juega a videojuegos no sabe hacer), necesitas tener la consola con los derechos de dicho videojuego y conseguirlas nuevas a día de hoy es imposible.</p>
                        </div>
                    </div>
                </div>
                <div class="card" data-toggle="collapse" data-target="#proyecto4">
                    <div class="card-body">
                        <h5 class="card-title">Profesor particular CORE</h5>
                        <div id="proyecto4" class="collapse">
                            <p class="card-text">Hace unos años estuve en la fundación CORE (San Jorge) dando clases particulares de lengua, matemáticas básicas, geografía... a personas migrantes que acababan de llegar al país y necesitaban una base para podert dar comienzo a sus estudios. Creo que, a parte de ser una experiencia que te quita los prejuicios de un sopapo, es una buena forma de practicar tus capacidades comunicativas, pues la mayor parte de la gente a la que te tocaba dar clase era gente con un nivel muy básico de castellano. También conocí a un monton de personas increibles y seguro que ahora mismo les va bien.</p>
                        </div>
                    </div>
                </div>
                                    <section id="nuevo-proyecto" class="my-5">
                        <h1>Añadir Nuevo Proyecto</h1>
                        <form action="agregar_proyecto.php" method="POST">
                            <div class="form-group">
                                <label for="nombre">Nombre del Proyecto</label>
                                <input type="text" class="form-control" id="nombre" name="nombre" required>
                            </div>
                            <div class="form-group">
                                <label for="descripcion">Descripción</label>
                                <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Añadir Proyecto</button>
                        </form>
                    </section>
            </div>
        </section>

        <!-- Contacto -->
        <section id="contacto" class="my-5" style="display:none;">
            <h1>Contacto</h1>
            <form id="form-contacto">
                <div class="form-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" class="form-control neon" id="nombre" placeholder="Introduce tu nombre">
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos</label>
                    <input type="text" class="form-control neon" id="apellidos" placeholder="Introduce tus apellidos">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección</label>
                    <input type="text" class="form-control neon" id="direccion" placeholder="Introduce tu dirección">
                </div>
                <div class="form-group">
                    <label for="email">Correo Electrónico</label>
                    <input type="email" class="form-control neon" id="email" placeholder="Introduce tu correo electrónico">
                </div>
                <button type="submit" class="btn btn-primary">Enviar</button>
            </form>
        </section>
    </div>

    <!-- jQuery y Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        $(document).ready(function() {
            $('.nav-link, #search-btn').hover(function() {
                $(this).css('box-shadow', '0 0 10px #0d6efd, 0 0 20px #0d6efd, 0 0 30px #0d6efd');
            }, function() {
                $(this).css('box-shadow', 'none');
            });

            $('.nav-link').on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;

                    // Ocultar todas las secciones
                    $('section').hide();

                    // Mostrar la sección correspondiente
                    $(hash).show();

                    $('html, body').animate({
                        scrollTop: $(hash).offset().top
                    }, 800, function(){
                        window.location.hash = hash;
                    });
                }
            });

            $('#search-btn').on('click', function() {
                var searchText = $('#search').val().toLowerCase();
                $('section').each(function() {
                    var sectionText = $(this).text().toLowerCase();
                    if (sectionText.includes(searchText)) {
                        $('section').hide();
                        $(this).show();
                        $('html, body').animate({
                            scrollTop: $(this).offset().top
                        }, 800);
                        return false; // Detener el bucle each una vez encontrada la coincidencia
                    }
                });
            });

            $('.card').hover(function() {
                $(this).css('box-shadow', '0 0 10px #0d6efd, 0 0 20px #0d6efd, 0 0 30px #0d6efd');
            }, function() {
                $(this).css('box-shadow', 'none');
            });

            $('.neon').hover(function() {
                $(this).css('box-shadow', '0 0 10px #0d6efd, 0 0 20px #0d6efd, 0 0 30px #0d6efd');
            }, function() {
                $(this).css('box-shadow', 'none');
            });

            $('#form-contacto').submit(function(event) {
                event.preventDefault();
                var email = $('#email').val();
                var emailPattern = /^[a-zA-Z0-9_.+-]+@[a-zA-Z0-9-]+\.[a-zA-Z0-9-.]+$/;
                if (!emailPattern.test(email)) {
                    alert('Por favor, introduce un correo electrónico válido.');
                } else {
                    alert('Formulario enviado correctamente.');
                }
            });
        });
    </script>
</body>
</html>
