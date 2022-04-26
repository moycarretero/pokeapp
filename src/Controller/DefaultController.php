<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    #[Route("/saludo/{name}/{surname}/{age}")]
    public function saludo($name,$surname,$age)

    {
       return $this->render("base.html.twig",
    ['nombre'=> $name,
     'apellidos'=> $surname,
     'edad' => $age
    ]);
    }
    #[Route("/hello")]
    
    public function hello()
    {
        return new Response ("Esto Es PHP");
    }
}
