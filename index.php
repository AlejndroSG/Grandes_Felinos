<?php
    $titulo = "Grandes Felinos";
    $contenido_head = file_get_contents('head.html');
    $contenido_head = str_replace('{{titulo}}', $titulo, $contenido_head);
    echo $contenido_head;
?>
<body id="principal">
    <?php require_once('header.html'); ?>
    <main class="oscuridad">
        <section class="container-fluid position-relative">
            <video src="./fotos/Inicio/Grandes_Felinos.mp4" loop muted autoplay poster="./fotos/Inicio/img1.jpg"></video>
            <div class="row">
                <div class="col text-center py-5 text-white">
                    <h1>Grandes Felinos</h1>
                    <p>El Documental</p>
                    <p>Un viaje fascinante a la vida de los depredadores más majestuosos de nuestro planeta.</p>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row dates py-5 px-3 text-white">
                <div class="col-12 col-lg-3 text-center">
                    <div class="mb-3">
                        <img src="./fotos/Inicio/Rodaje_Documental.jpg" alt="Equipo de cineastas en acción" class="img-fluid rounded shadow">
                    </div>
                    <h3>Inicio del Proyecto</h3>
                    <p>En 2020, un equipo de cineastas apasionados comenzó a explorar la vida de los grandes felinos.</p>
                </div>
                <div class="col-12 col-lg-3 text-center">
                    <div class="mb-3">
                        <img src="./fotos/Inicio/img5.jpg" alt="Felino en su hábitat natural" class="img-fluid rounded shadow">
                    </div>
                    <h3>Exploración de Hábitats</h3>
                    <p>Se filmaron escenas en selvas, sabanas y montañas para capturar la esencia de estos depredadores.</p>
                </div>
                <div class="col-12 col-lg-3 text-center">
                    <div class="mb-3">
                        <img src="./fotos/Inicio/img6.jpg" alt="Felinos en peligro de extinción" class="img-fluid rounded shadow">
                    </div>
                    <h3>Mensaje Central</h3>
                    <p>La importancia de conservar el equilibrio natural y proteger a estas especies en peligro.</p>
                </div>
                <div class="col-12 col-lg-3 text-center">
                    <div class="mb-3">
                        <img src="./fotos/Inicio/img7.jpg" alt="Personas ayudando a la conservación" class="img-fluid rounded shadow">
                    </div>
                    <h3>Impacto Global</h3>
                    <p>El documental ha inspirado a miles a unirse a iniciativas de conservación en todo el mundo.</p>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row text-white">
                <div id="cta-section" class="cta py-5 text-center col-md-6">
                    <div class="container flex-wrap">
                        <h2 class="cta-title mb-3">Por qué importan los grandes felinos</h2>
                        <p class="fs-5 mb-4">
                        50% de los hábitats de grandes felinos se han perdido en el último siglo.
                        </p>
                        <p class="fs-5 mb-4">Menos del 7% de los leopardos persas sobreviven en estado salvaje.</p>
                    </div>
                </div>
                <div id="cta-section" class="cta py-5 text-center col-md-6">
                    <div class="container">
                        <h2 class="cta-title mb-3">Descubre cómo ayudar</h2>
                        <p class="fs-5 mb-4">
                        Únete a nuestras iniciativas para proteger a los grandes felinos y su hábitat. Cada aporte cuenta para preservar su futuro.
                        </p>
                        <a href="#acciones" class="btn btn-primary btn-lg">Descubre cómo ayudar</a>
                    </div>
                </div>
            </div>
        </section>
        <section id="explora-mas" class="exploraMas text-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <div class="explora-text text-center position-absolute top-50 start-50 translate-middle">
                            <h2 class="explora-title">
                                "Los grandes felinos nos enseñan a respetar la naturaleza. <br> ¿Estás listo para aprender de ellos?"
                            </h2>
                        </div>
                        <div class="image-grid">
                            <div class="image-item"></div>
                            <div class="image-item"></div>
                            <div class="image-item"></div>
                            <div class="image-item"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?php
        include('footer.html');
    ?>
    <script src="./js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>