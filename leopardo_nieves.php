<?php
    $titulo = "Leopardo de las Nieves";
    $contenido_head = file_get_contents('head.html');
    $contenido_head = str_replace('{{titulo}}', $titulo, $contenido_head);
    echo $contenido_head;
?>
<body>
    <?php require_once('header.html'); ?>
    <main>
        <section class="container-fluid banner" id="bannerleopardoNieves">
            <div class="row w-100">
                <div class="col-md-8 text-center py-5 text-white">
                    <h1>El rey de las montañas nevadas</h1>
                    <h2 class="my-4">Leopardo de las Nieves</h2>
                    <a class="btn" href="#importanciaLeopardoNieves">Explorar Más</a>
                </div>
            </div>
        </section>
        <section class="container-fluid importancia" id="importanciaLeopardoNieves">
            <div class="row">
                <div class="col text-center py-5 text-white">
                    <div class="card p-3">
                        <div class="card-header">
                            <h2>La importancia del Leopardo de las Nieves</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">El leopardo de las nieves es un depredador clave en las montañas de Asia Central, ayudando a mantener el equilibrio ecológico.</h5>
                            <p class="card-text">
                                <ul class="list-group text-center py-3">
                                    <li class="list-group-item">Controla las poblaciones de sus presas en las altas montañas</li>
                                    <li class="list-group-item">Asegura la biodiversidad en su hábitat</li>
                                    <li class="list-group-item">Es un indicador de la salud ecológica de las regiones montañosas</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid px-5 sonidos" id="sonidosLeopardo">
            <div class="row">
                <div class="col-12 mb-5 fs-5">
                    <h2 class="text-center">Sonidos del Leopardo de las Nieves</h2>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Respiración profunda</h5>
                        <p class="card-text">Los leopardos de las nieves tienen una respiración profunda y controlada, adaptada a las frías y ventosas montañas en las que viven.</p>
                        <audio src="./audiosMP3/leopardo_nieves/Snow.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gruñido de alerta</h5>
                        <p class="card-text">El gruñido de alerta del leopardo de las nieves es agudo y fuerte, utilizado para advertir de una posible amenaza o para defender su territorio.</p>
                        <audio src="./audiosMP3/leopardo_nieves/Snow.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ronroneo de satisfacción</h5>
                        <p class="card-text">Al estar en un estado relajado o satisfecho, el leopardo de las nieves puede emitir un suave ronroneo similar al de otros felinos grandes.</p>
                        <audio src="./audiosMP3/leopardo_nieves/Snow.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid datos" id="datosLeopardo">
            <div class="row w-100 justify-content-center">
                <div class="col-md-8 text-center py-5 text-white">
                    <h2 class="mb-5">Datos Curiosos</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Habilidad de camuflaje
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>El leopardo de las nieves tiene un pelaje moteado que le permite camuflarse perfectamente en su entorno montañoso cubierto de nieve y rocas.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Cazadores nocturnos
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Los leopardos de las nieves cazan principalmente durante la noche, utilizando su visión nocturna y sigilo para sorprender a sus presas.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Adaptación al frío extremo
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>El leopardo de las nieves está perfectamente adaptado a las bajas temperaturas de las montañas, con un pelaje grueso y una capa subcutánea que lo aísla del frío.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Su gran salto
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>El leopardo de las nieves puede saltar hasta 10 metros de distancia, lo que le permite atravesar grandes obstáculos en su entorno montañoso.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                Reproducción
                            </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Las hembras de leopardo de las nieves paren de 1 a 3 crías, las cuales permanecen con ellas durante los primeros meses para aprender a cazar y sobrevivir.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                Conservación
                            </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>El leopardo de las nieves está clasificado como vulnerable debido a la caza furtiva y la pérdida de hábitat, lo que amenaza su población en las montañas de Asia Central.</p>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="videoPuma">
            <div class="row">
                <div class="col">
                    <iframe src="https://www.youtube.com/embed/AMu3KDHfgX4?si=TUbTmVAtgqacLYse" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
