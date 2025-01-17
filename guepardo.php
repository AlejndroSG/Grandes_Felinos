<?php
    $titulo = "Guepardo";
    $contenido_head = file_get_contents('head.html');
    $contenido_head = str_replace('{{titulo}}', $titulo, $contenido_head);
    echo $contenido_head;
?>
<body>
    <?php require_once('header.html'); ?>
    <main>
        <section class="container-fluid banner" id="bannerGuepardo">
            <div class="row w-100">
                <div class="col-md-8 text-center py-5 text-white">
                    <h1>El mejor velocista de los mamiferos</h1>
                    <h2 class="my-4">Guepardo</h2>
                    <a class="btn" href="#importanciaGuepardo">Explorar Más</a>
                </div>
            </div>
        </section>
        <section class="container-fluid importancia" id="importanciaGuepardo">
            <div class="row"></div>
                <div class="col-md-6 text-center py-5 text-white">
                    <div class="card p-5">
                        <div class="card-header">
                            <h2>La importancia del Guepardo</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">El guepardo es un depredador clave en su ecosistema, manteniendo el equilibrio en la sabana africana.</h5>
                            <p class="card-text">
                                <ul class="list-group text-center py-3">
                                    <li class="list-group-item">Controla las poblaciones de antílopes y otras presas</li>
                                    <li class="list-group-item">Evita la sobrepoblación de herbívoros</li>
                                    <li class="list-group-item">Contribuye a la biodiversidad de la sabana</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid px-5 sonidos" id="sonidosGuepardo">
            <div class="row">
                <div class="col-12 mb-5 fs-5">
                    <h2 class="text-center">Sonidos del Guepardo</h2>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Respiración profunda</h5>
                        <p class="card-text">Los guepardos tienen un sonido característico en cuanto a su respiración, ya que tienen una capacidad pulmonar superior al la media de los mamiferos</p>
                        <audio src="./audiosMP3/guepardo/respiracion.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gruñido de alerta</h5>
                        <p class="card-text">El rugido del guepardo para advertir de peligro o estado de alterta, es un sonido agudo y gutural, intimidante para los depredadores.</p>
                        <audio src="./audiosMP3/guepardo/rugido.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Ronroneo de felicidad</h5>
                        <p class="card-text">Al estar contentos o relajados, los guepardos pueden emitir un sonido similar a un ronco, utilizado para expresar satisfacción.</p>
                        <audio src="./audiosMP3/guepardo/ronronea.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid datos" id="datosGuepardo">
            <div class="row w-100 justify-content-center">
                <div class="col-md-8 text-center py-5 text-white">
                    <h2 class="mb-5">Datos Curiosos</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Velocidad impresionante
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Los guepardos son los animales terrestres más rápidos, capaces de alcanzar velocidades de hasta 110 km/h en carreras cortas.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Cazadores solitarios
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>A diferencia de otros grandes felinos, los guepardos cazan generalmente en solitario, utilizando su velocidad y agilidad para capturar presas pequeñas y medianas.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Ojos adaptados
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Los guepardos tienen una visión excelente durante el día, adaptada para detectar presas a largas distancias, lo que les ayuda a planificar su caza.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                Una cola de control
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Su larga cola les ayuda a mantener el equilibrio mientras corren a gran velocidad, actuando como un timón para cambios rápidos de dirección.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                Reproducción
                            </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Las hembras de guepardo paren entre 2 y 4 cachorros, que permanecen con ellas durante varios meses hasta aprender a cazar por sí mismos.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseThree">
                                Conservación
                            </button>
                            </h2>
                            <div id="collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Los guepardos están clasificados como vulnerables debido a la pérdida de hábitat y la caza ilegal, lo que pone en riesgo su población en diversas regiones de África.</p>
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
                    <iframe src="https://www.youtube.com/embed/H6vf8q-72pM?si=E1DlqQ9qB-6RMjSF" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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
