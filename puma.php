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
                            <a href="#" class="btn btn-primary">Go somewhere</a>
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