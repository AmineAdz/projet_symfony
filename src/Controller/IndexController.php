<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class IndexController extends AbstractController
{
#[Route('/index/{name}', name: 'app_index' , Requirements: ['name'=> '\d+'])]
    public function index(string $name = "Amine"): Response
    {
        return new Response("hello ". $name . "...");
    }
}
