<?php
    $current = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
?>
<header>
    <div class="navbar">
        <a class="navbar__brand" href="<?= BASE_URL ?>">
            <img src="<?= rtrim(BASE_URL, '/') ?>/assets/img/logo.png" alt="Recytec EcoGreen logo">
            <span>Recicladora EcoGreen Perú</span>
        </a>
        <nav class="navbar__links">
            <a href="<?= BASE_URL ?>" class="<?= $current === '/' ? 'active' : '' ?>">Inicio</a>
            <a href="<?= rtrim(BASE_URL, '/') ?>/servicios" class="<?= $current === '/servicios' ? 'active' : '' ?>">Servicios</a>
            <a href="<?= rtrim(BASE_URL, '/') ?>/proceso" class="<?= $current === '/proceso' ? 'active' : '' ?>">Proceso</a>
            <a href="<?= rtrim(BASE_URL, '/') ?>/contacto" class="<?= $current === '/contacto' ? 'active' : '' ?>">Contacto</a>
        </nav>
    </div>
</header>
