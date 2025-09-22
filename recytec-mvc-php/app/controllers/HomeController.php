<?php

namespace App\Controllers;

use Core\Controller;

class HomeController extends Controller
{
    public function index(): void
    {
        $this->render('home/index', [
            'pageTitle' => 'Gestión integral de residuos con resultados medibles',
            'metaDescription' => 'Recicladora EcoGreen Perú ofrece soluciones de reciclaje corporativo, gestión de residuos industriales y programas ambientales certificados.',
        ]);
    }
}
