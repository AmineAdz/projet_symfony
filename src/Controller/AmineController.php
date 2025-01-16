<?php

namespace App\Controller;

use assets\app;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class AmineController extends AbstractController
{
    #[Route('/amine/{name}', name: 'app_amine')]
    public function index(string $name = "Amine"): Response
    {
        return $this->render('amine/index.html.twig', [
            'name' => $name,
        ]);
    }
}
