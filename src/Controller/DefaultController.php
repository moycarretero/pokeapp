<?php

namespace App\Controller;

<<<<<<< HEAD
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController
{
    #[Route("/user/{name}")]
    public function saludo($name)
    {
        return new Response('Hi ' . $name);
    }
}
=======
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController //el extend abstrab es para heredar "importar" lo que tenemos en el otro fichero
{   
    #[Route("/saludo/{name}/{surname}/edad/{age}")]
    public function saludo($name, $surname, $age)
     {
        // return new Response("<h1>hola mi nombre  es $name, y mi apellido $surname y tengo $age</h1>");
        return $this->render("base.html.twig", 
        [
            'nombre'=>$name,  //nombre es la clave y name el valor
            'apellido'=>$surname,
            'edad'=>$age    
        ]);
     }


     #[Route("/hello")]
     public function hello()
     {
         return new Response("Hola Mundo");
     }
     
     #[Route("/user/{id}", methods: ['GET'])]
     public function  getUserr($id)
     {
         $user = [
             'nombre' =>'juan',
             'edad' =>'29',
             'genero' =>'masculino'
         ];
         return new JsonResponse($user);

     }
     #[Route("/user/{id}", methods: ['DELETE'])]
     public function  removeUser($id)
     {

     }
     #[Route("/user/{id}", methods: ['PUT'])]
     public function  updateUser($id)
     {

     }
     #[Route("/user/{id}", methods: ['POST'])]
     public function  createUser($id)
     {

     }
    }
>>>>>>> main
