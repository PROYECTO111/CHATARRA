<?php

namespace App\Controllers;

use App\Models\Contacto;
use Core\Controller;

class ContactoController extends Controller
{
    public function index(): void
    {
        $this->render('contacto/index', [
            'pageTitle' => 'Contáctanos',
            'metaDescription' => 'Solicita una visita técnica o cotización para gestionar residuos con el equipo de Recicladora EcoGreen Perú.',
            'success' => $_GET['enviado'] ?? null,
        ]);
    }

    public function enviar(): void
    {
        $nombre = trim($_POST['nombre'] ?? '');
        $empresa = trim($_POST['empresa'] ?? '');
        $telefono = trim($_POST['telefono'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $mensaje = trim($_POST['mensaje'] ?? '');

        if ($nombre === '' || $email === '' || $telefono === '' || $mensaje === '') {
            $_SESSION['form_error'] = 'Por favor completa los campos obligatorios.';
            $redirect = $_SERVER['HTTP_REFERER'] ?? rtrim(BASE_URL, '/') . '/contacto';
            header('Location: ' . $redirect);
            return;
        }

        $contacto = new Contacto();
        $contacto->create([
            'nombre' => $nombre,
            'empresa' => $empresa,
            'telefono' => $telefono,
            'email' => $email,
            'mensaje' => $mensaje,
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        header('Location: ' . rtrim(BASE_URL, '/') . '/contacto?enviado=1');
    }
}
