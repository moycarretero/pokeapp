<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class  PokemonController extends AbstractController
{

    #[Route("/pokemon")]
    public function getPokemon()
    {
        $pokemon = [
            "name" => "Pikachu",
            "description" => "Cuanto más potente es la energía eléctrica que genera este Pokémon, más suaves y elásticas se vuelven las bolsas de sus mejillas.",
            "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png",
            "id" => "025"
        ];
        return $this->render('pokemons/ShowPokemon.html.twig', ['pokemon' => $pokemon]);
    }


    #[Route("/pokemons", name: "pokemonsList")]
    public function getPokemons()
    {
        $pokemons = [
            [
                "name" => "Pikachu",
                "description" => "Cuanto más potente es la energía eléctrica que genera este Pokémon, más suaves y elásticas se vuelven las bolsas de sus mejillas.",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png",
                "id" => "025"
            ],
            [
                "name" => "Charmander",
                "description" => "Charmander es el  mejor",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png",
                "id" => "004"
            ],
            [
                "name" => "Squirtle",
                "description" => "Cuanto más potente es la energía eléctrica que genera este Pokémon, más suaves y elásticas se vuelven las bolsas de sus mejillas.",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/007.png",
                "id" => "007"
            ],
            [
                "name" => "Bulbasaur",
                "description" => "Cuanto más potente es la energía eléctrica que genera este Pokémon, más suaves y elásticas se vuelven las bolsas de sus mejillas.",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png",
                "id" => "001"
            ],
            [
                "name" => "Charmander",
                "description" => "Cuanto más potente es la energía eléctrica que genera este Pokémon, más suaves y elásticas se vuelven las bolsas de sus mejillas.",
                "image" => "https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png",
                "id" => "004"
            ],

        ];
        return $this->render('pokemons/ListPokemons.html.twig', ['pokemons' => $pokemons]);
    }
}
