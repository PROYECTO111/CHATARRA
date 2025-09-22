<?php

declare(strict_types=1);

session_start();

$basePath = dirname(__DIR__);

$config = require $basePath . '/config/config.php';

define('BASE_URL', rtrim($config['app']['base_url'] ?? '/', '/') ?: '/');

spl_autoload_register(function ($class) use ($basePath) {
    $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    $file = $basePath . '/' . $classPath . '.php';

    if (str_starts_with($class, 'App\\')) {
        $file = $basePath . '/app/' . substr($classPath, 4) . '.php';
    } elseif (str_starts_with($class, 'Core\\')) {
        $file = $basePath . '/core/' . substr($classPath, 5) . '.php';
    }

    if (file_exists($file)) {
        require_once $file;
    }
});

Core\Database::configure($config['database']);

$router = new Core\Router();

$router->get('/', fn() => (new App\Controllers\HomeController())->index());
$router->get('/servicios', fn() => (new App\Controllers\ServiciosController())->index());
$router->get('/proceso', fn() => (new App\Controllers\ProcesoController())->index());
$router->get('/contacto', fn() => (new App\Controllers\ContactoController())->index());
$router->post('/contacto/enviar', fn() => (new App\Controllers\ContactoController())->enviar());

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$requestPath = parse_url($requestUri, PHP_URL_PATH) ?? '/';

if (BASE_URL !== '/' && str_starts_with($requestPath, BASE_URL)) {
    $requestPath = substr($requestPath, strlen(BASE_URL)) ?: '/';
}

$router->dispatch($_SERVER['REQUEST_METHOD'], $requestPath);
