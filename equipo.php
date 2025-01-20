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
                    <h5>Rachid Piñero</h5>
                    <p class="text-muted">Diseñador Web</p>
                    <p>"Apasionado por crear experiencias visuales únicas."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/2.jpg" class="rounded-circle mb-3" alt="Miembro 2">
                    <h5>Maria Pino</h5>
                    <p class="text-muted">Desarrolladora</p>
                    <p>"Convirtiendo ideas en soluciones funcionales."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/3.jpg" class="rounded-circle mb-3" alt="Miembro 3">
                    <h5>Cesar Olivera</h5>
                    <p class="text-muted">Gerente de Proyecto</p>
                    <p>"Liderando proyectos con pasión y eficacia."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/4.jpg" class="rounded-circle mb-3" alt="Miembro 1">
                    <h5>Anais Verdu</h5>
                    <p class="text-muted">Artista Digital</p>
                    <p>"Convirtiendo ideas en visuales impactantes."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/5.jpg" class="rounded-circle mb-3" alt="Miembro 2">
                    <h5>Lorenzo Castañeda</h5>
                    <p class="text-muted">Fotógrafo</p>
                    <p>"Capturando momentos extraordinarios."</p>
                </div>
                <div class="col-md-4 text-center">
                    <img src="./fotos/equipo/6.jpg" class="rounded-circle mb-3" alt="Miembro 3">
                    <h5>Cristian San-Jose</h5>
                    <p class="text-muted">Coordinador de equipo de grabación</p>
                    <p>"Trabajando en equipo para crear contenido impactante."</p>
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
                            <div class="card p-3 h-100 p-5">
                                <h5>Investigación y Análisis</h5>
                                <p>Comenzamos con una investigación exhaustiva sobre el estado actual de las especies de grandes felinos, sus hábitats y las amenazas que enfrentan. Analizamos datos científicos y colaboramos con expertos para tomar decisiones informadas.</p>
                                <img src="./fotos/equipo/investigacion.jpg" alt="">
                            </div>
                            <div class="card p-3 h-100 p-5">
                                <h5>Planificación Estratégica</h5>
                                <p>Diseñamos iniciativas prácticas y escalables para abordar los problemas identificados. Esto incluye estrategias de conservación, sensibilización pública y colaboración con comunidades locales.</p>
                                <img src="./fotos/equipo/estrategia.png" alt="">
                            </div>
                            <div class="card p-3 h-100 p-5">
                                <h5>Implementación en Terreno</h5>
                                <p>Nuestro equipo ejecuta las estrategias directamente en los ecosistemas de los grandes felinos. Esto incluye actividades como reforestación, creación de corredores ecológicos y rescate de animales en peligro.</p>
                                <img src="./fotos/equipo/terreno.jpg" alt="">
                            </div>
                            <div class="card p-3 h-100 p-5">
                                <h5>Monitoreo y Divulgación</h5>
                                <p>Evaluamos el impacto de nuestras acciones mediante monitoreo constante y compartimos los resultados con la comunidad global. Informar a los colaboradores y al público asegura transparencia y refuerza el apoyo.</p>
                                <img src="./fotos/equipo/monitoreo.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-3 botones">
                            <button class="active text-white my-4" >1</button>
                            <button class="active text-white my-4">2</button>
                            <button class="active text-white my-4">3</button>
                            <button class="active text-white my-4">4</button>
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
                    <a href="./asociacion.php" class="btn btn-primary btn-lg">Contribuir Ahora</a>
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