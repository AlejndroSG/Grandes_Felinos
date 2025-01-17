<?php
    $titulo = "Puma";
    $contenido_head = file_get_contents('head.html');
    $contenido_head = str_replace('{{titulo}}', $titulo, $contenido_head);
    echo $contenido_head;
?>
<body>
    <?php require_once('header.html'); ?>
    <main>
        <section class="container-fluid banner" id="bannerPuma">
            <div class="row">
                <div class="col-md-8 text-center py-5 text-white">
                    <h1>El Guardian Silencioso de las Montañas</h1>
                    <h2 class="my-4">Puma</h2>
                    <a class="btn" href="#importanciaPuma">Explorar Más</a>
                </div>
            </div>
        </section>
        <section class="container-fluid importancia" id="importanciaPuma">
            <div class="row"></div>
                <div class="col-md-6 text-center py-5 text-white">
                    <div class="card p-5">
                        <div class="card-header">
                            <h2>La importancia del Puma</h2>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title">El puma es más que un depredador; es un regulador natural que mantiene el equilibrio en su ecosistema.</h5>
                            <p class="card-text">
                                <ul class="list-group text-center py-3">
                                    <li class="list-group-item">Controla poblaciones de hervívoros</li>
                                    <li class="list-group-item">Prevee la sobreexplotación de recursos vegetales</li>
                                    <li class="list-group-item">Tiene un papel crucial en la biodiversidad</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid px-5" id="sonidosPuma">
            <div class="row">
                <div class="col-12 mb-5 fs-5">
                    <h2 class="text-center">Sonidos del Puma</h2>
                </div>
                <div class="col-sm-4 mb-3 mb-sm-0">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Maullido o llamado de apareamiento</h5>
                        <p class="card-text">Las hembras en celo emiten maullidos prolongados y penetrantes para atraer a los machos durante la temporada de apareamiento. Este sonido puede ser escuchado a largas distancias y es esencial para la reproducción de la especie. 
                        </p>
                        <audio src="./audiosMP3/puma/maullarPuma.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gruñido de advertencia</h5>
                        <p class="card-text">Cuando un puma se siente amenazado o está defendiendo su territorio, emite un gruñido profundo y gutural como señal de advertencia. Este sonido busca intimidar a posibles intrusos o depredadores.</p>
                        <audio src="./audiosMP3/puma/rugir.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Silbido o bufido de alarma</h5>
                        <p class="card-text">Ante una amenaza inminente, los pumas pueden emitir un silbido agudo o un bufido corto para expresar sorpresa o alarma. Esta vocalización suele ir acompañada de una postura defensiva y está destinada a disuadir al agresor.</p>
                        <audio src="./audiosMP3/puma/Buffar.mp3" controls class="w-100"></audio>
                    </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="container-fluid datos" id="datosPuma">
            <div class="row w-100 justify-content-center">
                <div class="col-md-8 text-center py-5 text-white">
                    <h2 class="mb-5">Datos Curiosos</h2>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                Distribución geográfica
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Los pumas son uno de los felinos con mayor rango geográfico, ya que se pueden encontrar desde Canadá hasta el sur de Chile y Argentina, abarcando una amplia variedad de hábitats, desde montañas hasta bosques y desiertos.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Grandes saltadores
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Los pumas son excelentes saltadores y pueden saltar distancias de hasta 6 metros en un solo brinco, lo que les permite superar barreras naturales en su entorno.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Adaptabilidad
                            </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Son increíblemente adaptables y pueden vivir en una variedad de climas y ecosistemas, desde las zonas frías de las montañas rocosas hasta las zonas áridas de América del Norte.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseThree">
                                Silencio Mortal
                            </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Los pumas son conocidos por su habilidad para moverse en silencio absoluto. Son depredadores solitarios que cazan principalmente al atardecer o durante la noche.</p>
                            </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseThree">
                                Reproducción y crías
                            </button>
                            </h2>
                            <div id="collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p>Las hembras paren entre 1 y 6 cachorros, que permanecen con ellas durante los primeros meses de vida. La madre enseña a sus crías a cazar y sobrevivir en la naturaleza.</p>
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
                                <p>Aunque no están en peligro de extinción, los pumas enfrentan amenazas como la pérdida de hábitat y la caza ilegal, lo que afecta su población en algunas áreas.</p>
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
                    <iframe src="https://www.youtube.com/embed/HsHN6l_bf8E?si=FFoPO8lIKhyrKtgB" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
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