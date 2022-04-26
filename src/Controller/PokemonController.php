<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    #[Route('/pokemon')]

    public function getPokemon()
    {
        $pokemon = [
            'nombre' => 'charmander',
            'descripcion' =>
                'Prefiere las cosas calientes. Dicen que cuando llueve le sale vapor de la punta de la cola.',
            'img' =>
                'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png',
            'id' => '004',
        ];
        return $this->render('pokemons/ShowPokemon.html.twig', [
            'pokemon' => $pokemon,
        ]);
    }

    #[Route("/pokemons",name:"list_de_pokemons")]
    public function getPokemons()
    {
        $pokemons = [
            [
                'nombre' => 'charmander',
                'descripcion' =>
                    'Prefiere las cosas calientes. Dicen que cuando llueve le sale vapor de la punta de la cola.',
                'img' =>
                    'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png',
                'id' => '004',
            ],
            [
                'nombre' => 'Pichu',
                'descripcion' =>
                    'A pesar de su pequeño tamaño, puede soltar descargas capaces de electrocutar a un adulto, si bien él también acaba sobresaltado.',
                'img' =>
                    'https://assets.pokemon.com/assets/cms2/img/pokedex/full/172.png',
                'id' => '172',
            ],
            [
                'nombre' => 'Dragonite',
                'descripcion' =>
                    'Un Pokémon bondadoso y compasivo al que le resulta imposible dar la espalda a Pokémon o humanos que se encuentren a la deriva.',
                'img' =>
                    'https://assets.pokemon.com/assets/cms2/img/pokedex/full/149.png',
                'id' => '149',
            ],
        ];
        return $this -> render('pokemons/listPokemons.html.twig',['pokemons'=> $pokemons]);
    }
}
