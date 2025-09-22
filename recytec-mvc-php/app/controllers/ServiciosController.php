<?php

namespace App\Controllers;

use Core\Controller;

class ServiciosController extends Controller
{
    public function index(): void
    {
        $this->render('servicios/index', [
            'pageTitle' => 'Servicios de reciclaje y economía circular',
            'metaDescription' => 'Conoce los servicios de recolección, segregación, destrucción certificada y reaprovechamiento de materiales de Recicladora EcoGreen Perú.',
        ]);
    }
}
