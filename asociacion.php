<?php
    $titulo = "Nuestro Equipo";
    $contenido_head = file_get_contents('head.html');
    $contenido_head = str_replace('{{titulo}}', $titulo, $contenido_head);
    echo $contenido_head;
?>
<body id="asociacion">
    <?php require_once('header.html'); ?>
    <main>
            <!-- Sección Hero -->
        <section id="bannerAsociacion" class="text-white text-center d-flex align-items-center justify-content-center">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <h1>Protejamos a los Grandes Felinos</h1>
                        <p class="lead my-4">Únete a nuestra misión de preservar el futuro de estas especies únicas.</p>
                        <a href="#donar" class="btn btn-primary btn-lg">Haz tu Donación Ahora</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Sobre la Asociación -->
        <section class="py-5 bg-light" id="sobre-nosotros">
            <div class="container text-center">
                <div class="row">
                    <div class="col">
                        <h2 class="mb-4">¿Quiénes somos?</h2>
                        <p class="fs-5">"Grandes Felinos" es una asociación dedicada a la conservación de pumas, leopardos de las nieves y guepardos. Trabajamos incansablemente para proteger su hábitat, combatir la caza furtiva y concienciar sobre su importancia en los ecosistemas.</p>
                    </div>
                </div>
            </div>
        </section>

        <!-- Iniciativas Actuales -->
        <section class="py-5">
            <div class="container">
                <h2 class="text-center mb-4">Nuestras Iniciativas</h2>
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="./fotos/asociacion/proteger_habitat.jpg" class="card-img-top" alt="Protección del hábitat">
                            <div class="card-body">
                                <h5 class="card-title">Protección del Hábitat</h5>
                                <p class="card-text">Trabajamos en la reforestación y creación de corredores ecológicos para asegurar un espacio seguro para los felinos.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="./fotos/asociacion/evitar_caza.jpg" class="card-img-top" alt="Combate a la caza furtiva">
                            <div class="card-body">
                                <h5 class="card-title">Combate a la Caza Furtiva</h5>
                                <p class="card-text">Colaboramos con comunidades locales y autoridades para proteger a estas especies de la caza ilegal.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card h-100">
                            <img src="./fotos/asociacion/cuidar.jpg" class="card-img-top" alt="Educación y Sensibilización">
                            <div class="card-body">
                                <h5 class="card-title">Educación y Sensibilización</h5>
                                <p class="card-text">Organizamos talleres y campañas para promover la importancia de la conservación de grandes felinos.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Cómo Puedes Ayudar -->
        <section class="py-5 bg-light" id="como-ayudar">
            <div class="container text-center">
                <h2 class="mb-4">¿Cómo puedes ayudar?</h2>
                <ul class="list-unstyled">
                    <li class="mb-3 fs-5"><strong>Haz una donación</strong>: Cada aporte nos acerca a la meta.</li>
                    <li class="mb-3 fs-5"><strong>Únete como voluntario</strong>: Sé parte del cambio directamente.</li>
                    <li class="mb-3 fs-5"><strong>Comparte nuestro mensaje</strong>: Ayuda a llegar a más personas.</li>
                </ul>
            </div>
        </section>

        <!-- Formulario de Donación -->
        <section class="py-5" id="donar">
            <div class="container text-center">
                <h2 class="mb-4">¡Haz tu donación ahora!</h2>
                <form>
                    <div class="row g-3">
                        <div class="col-md-6">
                            <input type="text" class="form-control" placeholder="Nombre" required>
                        </div>
                        <div class="col-md-6">
                            <input type="email" class="form-control" placeholder="Correo electrónico" required>
                        </div>
                        <div class="col-md-6">
                            <select class="form-select" required>
                                <option value="" disabled selected>Selecciona cantidad</option>
                                <option value="10">10€</option>
                                <option value="50">50€</option>
                                <option value="100">100€</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <button type="submit" class="btn btn-primary w-100">Donar</button>
                        </div>
                    </div>
                </form>
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