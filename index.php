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
                    <a href="./galeria.php" class="btn btn-primary">Galeria</a>
                    <a href="./equipo.php" class="btn btn-primary">Equipo</a>
                    <a href="./contacto.php" class="btn btn-primary">Contacto</a>
                    <a href="./nosotros.php" class="btn btn-primary">Nosotros</a>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <div class="col text-center py-5 text-white">
                    <h1>Grandes Felinos</h1>
                    <p>El Documental</p>
                    <a href="./galeria.php" class="btn btn-primary">Galeria</a>
                    <a href="./equipo.php" class="btn btn-primary">Equipo</a>
                    <a href="./contacto.php" class="btn btn-primary">Contacto</a>
                    <a href="./nosotros.php" class="btn btn-primary">Nosotros</a>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <div class="col text-center py-5 text-white">
                    <h1>Grandes Felinos</h1>
                    <p>El Documental</p>
                    <a href="./galeria.php" class="btn btn-primary">Galeria</a>
                    <a href="./equipo.php" class="btn btn-primary">Equipo</a>
                    <a href="./contacto.php" class="btn btn-primary">Contacto</a>
                    <a href="./nosotros.php" class="btn btn-primary">Nosotros</a>
                </div>
            </div>
        </section>
        <section class="container-fluid">
            <div class="row">
                <div class="col text-center py-5 text-white">
                    <h1>Grandes Felinos</h1>
                    <p>El Documental</p>
                    <a href="./galeria.php" class="btn btn-primary">Galeria</a>
                    <a href="./equipo.php" class="btn btn-primary">Equipo</a>
                    <a href="./contacto.php" class="btn btn-primary">Contacto</a>
                    <a href="./nosotros.php" class="btn btn-primary">Nosotros</a>
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