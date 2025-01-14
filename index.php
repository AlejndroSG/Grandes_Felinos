<?php
    $titulo = "Grandes Felinos";
    $contenido_head = file_get_contents('head.html');
    $contenido_head = str_replace('{{titulo}}', $titulo, $contenido_head);
    echo $contenido_head;
?>
<body id="principal">
    <?php require_once('header.html'); ?>
    <main class="oscuridad">
        <section class="container-fluid">
            <div class="row">
                <div class="col text-center py-5 text-white">
                    <h1>Grandes Felinos</h1>
                    <p>El Documental</p>
                    <p>Un viaje fascinante a la vida de los depredadores más majestuosos de nuestro planeta.</p>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <div class="col text-center text-white">
                    <div id="timeline-section" class="timeline p-5">
                        <div class="container-fluid">
                            <div class="row justify-content-center position-relative">
                            <!-- Línea central -->
                            <div class="timeline-line d-none d-md-block"></div>

                            <!-- Hito 1 -->
                            <div class="col-12 col-md-3 text-center">
                                <div class="timeline-item">
                                <div class="timeline-image mb-3">
                                    <img src="./fotos/Inicio/Rodaje_Documental.jpg" alt="Equipo de cineastas en acción" class="img-fluid rounded shadow">
                                </div>
                                <h3 class="timeline-title">Inicio del Proyecto</h3>
                                <p class="timeline-text">En 2020, un equipo de cineastas apasionados comenzó a explorar la vida de los grandes felinos.</p>
                                </div>
                            </div>

                            <!-- Hito 2 -->
                            <div class="col-12 col-md-3 text-center">
                                <div class="timeline-item">
                                <div class="timeline-image mb-3">
                                    <img src="./fotos/Inicio/img5.jpg" alt="Felino en su hábitat natural" class="img-fluid rounded shadow">
                                </div>
                                <h3 class="timeline-title">Exploración de Hábitats</h3>
                                <p class="timeline-text">Se filmaron escenas en selvas, sabanas y montañas para capturar la esencia de estos depredadores.</p>
                                </div>
                            </div>

                            <!-- Hito 3 -->
                            <div class="col-12 col-md-3 text-center">
                                <div class="timeline-item">
                                <div class="timeline-image mb-3">
                                    <img src="./fotos/Inicio/img6.jpg" alt="Felinos en peligro de extinción" class="img-fluid rounded shadow">
                                </div>
                                <h3 class="timeline-title">Mensaje Central</h3>
                                <p class="timeline-text">La importancia de conservar el equilibrio natural y proteger a estas especies en peligro.</p>
                                </div>
                            </div>

                            <!-- Hito 4 -->
                            <div class="col-12 col-md-3 text-center">
                                <div class="timeline-item">
                                <div class="timeline-image mb-3">
                                    <img src="./fotos/Inicio/img7.jpg" alt="Personas ayudando a la conservación" class="img-fluid rounded shadow">
                                </div>
                                <h3 class="timeline-title">Impacto Global</h3>
                                <p class="timeline-text">El documental ha inspirado a miles a unirse a iniciativas de conservación en todo el mundo.</p>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row text-white">
                <div id="cta-section" class="cta py-5 text-center col-md-6">
                    <div class="container flex-wrap">
                        <h2 class="cta-title mb-3">Por qué importan los grandes felinos</h2>
                        <p class="cta-text mb-4">
                        50% de los hábitats de grandes felinos se han perdido en el último siglo.
                        </p>
                        <p class="cta-text mb-4">Menos del 7% de los leopardos persas sobreviven en estado salvaje.</p>
                    </div>
                </div>
                <div id="cta-section" class="cta py-5 text-center col-md-6">
                    <div class="container">
                        <h2 class="cta-title mb-3">Descubre cómo ayudar</h2>
                        <p class="cta-text mb-4">
                        Únete a nuestras iniciativas para proteger a los grandes felinos y su hábitat. Cada aporte cuenta para preservar su futuro.
                        </p>
                        <a href="#acciones" class="btn btn-primary btn-lg">Descubre cómo ayudar</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="explora-mas" class="explora-mas-section text-white">
            <div class="container-fluid h-100 position-relative">
                <!-- Frase de Cierre -->
                <div class="explora-text text-center position-absolute top-50 start-50 translate-middle">
                <h2 class="explora-title">
                    "Los grandes felinos nos enseñan a respetar la naturaleza. <br> ¿Estás listo para aprender de ellos?"
                </h2>
                </div>

                <!-- Imágenes Distribuidas -->
                <div class="image-grid position-relative">
                    <div class="image-item"></div>
                    <div class="image-item"></div>
                    <div class="image-item"></div>
                    <div class="image-item"></div>
                </div>

                <!-- Iconos de Redes Sociales -->
                <div class="social-icons position-fixed bottom-0 end-0 p-4">
                    <a href="https://facebook.com" target="_blank" class="icon-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"         stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z"/>
                        </svg>
                    </a>
                    <a href="https://twitter.com" target="_blank" class="icon-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"/>
                        </svg>                
                    </a>
                    <a href="mailto:contacto@grandesfelinos.com" class="icon-link">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2zm0 4c0-1.1.9-2 2-2h12c1.1 0 2 .9 2 2v8c0 1.1-.9 2-2 2H6c-1.1 0-2-.9-2-2V8z"/>
                        </svg>
                    </a>
                </div>
            </div>
        </section>
    </main>
    <?php
        include('footer.html');
    ?>
    <script src="./js.js?v=1.0"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>