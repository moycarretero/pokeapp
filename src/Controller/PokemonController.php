<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController {

    #[Route('/pokemon')]

    public function getPokemon()

    {
        $pokemon =[
            'nombre'=>'charmander',
            'descripcion'=>'Prefiere las cosas calientes. Dicen que cuando llueve le sale vapor de la punta de la cola.',
            'img'=>'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png',
            'id'=>'004'
            
        ];
        return $this-> render('pokemons/ShowPokemon.html.twig', ['pokemon'=>$pokemon]);
    }
}