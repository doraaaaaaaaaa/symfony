<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AuthorController extends AbstractController
{
    #[Route('/author', name: 'show author')]
    public function index(): Response
    {
        return $this->render('author/show author.html.twig', [
            'controller_name' => 'AuthorController',
        ]);
    }


#[Route('/showAuthor/{name}',name:'show_Author')]
    public function showAuthor($name)
       {
       return $this->render('author/show author.html.twig',['author'=>$name]);
    }
    #[Route('/showlist',name:'list')]
     public function list(){
        $authors = array(
            array('id' => 1, 'picture' => '/images/victor hugo.jpg','username' => ' victor hugo', 'email' => 'victor.hugo@gmail.com ', 'nb_books' => 100),
            array('id' => 2, 'picture' => '/images/william.jpg','username' => '
            william ', 'email' => ' william@gmail.com', 'nb_books' =>
            200 ),
    
            array('id' => 3, 'picture' => '/images/TahaHussein.jpg','username' => ' TahaHussein', 'email' => 'Taha.Hussein@gmail.com', 'nb_books' => 300),);
            return $this->render('author/list.html.twig',['images'=>$authors]);
    }

    #[Route('/authorDetails',name:'details')]
    public function authorDetails($id ){



    }
    
    
    
    
    }



