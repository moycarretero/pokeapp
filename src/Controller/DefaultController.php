<?php

namespace App\Controller;

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
