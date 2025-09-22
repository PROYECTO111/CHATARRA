<?php

namespace App\Controllers;

use Core\Controller;

class ProcesoController extends Controller
{
    public function index(): void
    {
        $this->render('proceso/index', [
            'pageTitle' => 'Proceso operativo certificado',
            'metaDescription' => 'Descubre nuestro proceso paso a paso para asegurar trazabilidad, cumplimiento normativo y valorización óptima de tus residuos.',
        ]);
    }
}
