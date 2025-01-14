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
                    <h2>Puma</h2>
                    <p>Un viaje fascinante a la vida de los depredadores más majestuosos de nuestro planeta.</p>
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