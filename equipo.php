<?php
    $titulo = "Nuestro Equipo";
    $contenido_head = file_get_contents('head.html');
    $contenido_head = str_replace('{{titulo}}', $titulo, $contenido_head);
    echo $contenido_head;
?>
<body id="team">
    <?php require_once('header.html'); ?>
    <main>
        <!-- Conoce a los Miembros del Equipo -->
        <section id="miembros-equipo" class="bg-light py-5 container">
            <h1 class="text-center mb-5">Nuestro Equipo</h1>
            <div class="row g-4">
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/1.jpg" class="rounded-circle mb-3" alt="Miembro 1">
                    <h5>Nombre 1</h5>
                    <p class="text-muted">Diseñador Web</p>
                    <p>"Apasionado por crear experiencias visuales únicas."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/2.jpg" class="rounded-circle mb-3" alt="Miembro 2">
                    <h5>Nombre 2</h5>
                    <p class="text-muted">Desarrollador</p>
                    <p>"Convirtiendo ideas en soluciones funcionales."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/3.jpg" class="rounded-circle mb-3" alt="Miembro 3">
                    <h5>Nombre 3</h5>
                    <p class="text-muted">Gerente de Proyecto</p>
                    <p>"Liderando proyectos con pasión y eficacia."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/4.jpg" class="rounded-circle mb-3" alt="Miembro 1">
                    <h5>Nombre 1</h5>
                    <p class="text-muted">Diseñador Web</p>
                    <p>"Apasionado por crear experiencias visuales únicas."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/5.jpg" class="rounded-circle mb-3" alt="Miembro 2">
                    <h5>Nombre 2</h5>
                    <p class="text-muted">Desarrollador</p>
                    <p>"Convirtiendo ideas en soluciones funcionales."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/6.jpg" class="rounded-circle mb-3" alt="Miembro 3">
                    <h5>Nombre 3</h5>
                    <p class="text-muted">Gerente de Proyecto</p>
                    <p>"Liderando proyectos con pasión y eficacia."</p>
                </div>
            </div>
        </section>

        <!-- Nuestro Proceso de Trabajo -->
        <section id="proceso-trabajo" class="container bg-light py-5 my-0">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2 class="mb-4">Nuestro Proceso</h2>
                    <p class="fs-5">Desde la idea inicial hasta el resultado final, trabajamos de manera colaborativa y estratégica para alcanzar nuestros objetivos.</p>
                    <div class="row g-4 text-center mt-4">
                        <div class="col-md-9 contenido">
                            <div class="card p-3 h-100">
                                <h5>1. Idea</h5>
                                <p>Exploramos conceptos innovadores.</p>
                            </div>
                            <div class="card p-3 h-100">
                                <h5>2. Planificación</h5>
                                <p>Definimos objetivos claros y estrategias.</p>
                            </div>
                            <div class="card p-3 h-100">
                                <h5>3. Desarrollo</h5>
                                <p>Damos vida a las ideas con creatividad.</p>
                            </div>
                            <div class="card p-3 h-100">
                                <h5>4. Resultados</h5>
                                <p>Entregamos proyectos que superan expectativas.</p>
                            </div>
                        </div>
                        <div class="col-md-3 botones">
                            <button class="active text-white bg-primary w-100 my-4" >1. Idea</button>
                            <button class="active text-white bg-primary w-100 my-4">2. Planificación</button>
                            <button class="active text-white bg-primary w-100 my-4">3. Desarrollo</button>
                            <button class="active text-white bg-primary w-100 my-4">4. Resultados</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Logros y Reconocimientos -->
        <section id="logros-reconocimientos" class="bg-light py-5 container my-0">
            <h2 class="text-center mb-4">Nuestros Logros</h2>
            <div class="row text-center g-4">
                <div class="col-md-4">
                    <div class="card p-4">
                        <h5>+100 Proyectos Completados</h5>
                        <p>Hemos entregado soluciones exitosas en diversos sectores.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h5>Premios y Reconocimientos</h5>
                        <p>Reconocidos por nuestra innovación y compromiso.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card p-4">
                        <h5>+500 Clientes Felices</h5>
                        <p>Confían en nosotros para transformar sus ideas.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="container-fluid bg-light py-5" id="unete-iniciativas">
            <div class="row justify-content-center text-center">
                <div class="col-md-8">
                    <h2 class="mb-4">Únete a nuestras iniciativas</h2>
                    <p class="fs-5 mb-4">Para proteger a los grandes felinos y su hábitat. Cada aporte cuenta para preservar su futuro.</p>
                    <a href="#contacto" class="btn btn-primary btn-lg">Contribuir Ahora</a>
                </div>
            </div>
        </section>
    </main>
    <?php
        include('footer.html');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="./js.js?v=<?php echo time(); ?>"></script>
</body>