<?php
    $titulo = "Puma";
    $contenido_head = file_get_contents('head.html');
    $contenido_head = str_replace('{{titulo}}', $titulo, $contenido_head);
    echo $contenido_head;
?>
<body>
    <?php require_once('header.html'); ?>
    <main>
        <section class="container-fluid" id="bannerPuma">
            <div class="row">
                <div class="col-md-8 text-center py-5 text-white">
                    <h1>El Guardian Silencioso de las Montañas</h1>
                    <h2 class="my-4">Puma</h2>
                    <a class="btn" href="#importanciaPuma">Explorar Más</a>
                </div>
            </div>
        </section>
        <section class="container-fluid" id="importanciaPuma">
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
        <section class="container-fluid" id="datosCuriosos">
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
    </main>
    <?php
        include('footer.html');
    ?>
    <script src="./js.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>