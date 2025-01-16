<?php

namespace App\Controller;

use App\Entity\Book;
use App\Form\BookType;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\Component\Routing\Requirement\Requirement;

class IndexController extends AbstractController
{
#[Route('/index/{name}', name: 'app_index' , requirements: ['name'=> '\d+'])]
    public function index(string $name = "Amine"): Response
    {
        return new Response("hello ". $name . "...");
    }

    #[Route('/book_add', name: 'app_book_add')]
    public function bookAdd(string $name = "Amine"): Response
    {
        $book = new Book();
        
        $bookForm = $this->createForm(BookType::class, $book);

        return $this->render('amine/book.html.twig', [
            'bookForm' => $bookForm 
        ]);
    }
}
