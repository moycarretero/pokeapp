<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController
{
    #[Route("/pokemon", name:"listpokemon")]
    public function getPokemon()
    {
        $pokemon = [
            'name' => 'Pikachu',
            'id' => '025',
            'description' => 'Cuanto más potente es la energía eléctrica que genera este Pokémon, más suaves y elásticas se vuelven las bolsas de sus mejillas. ',
            'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/025.png'
        ];
        return $this->render('pokemons/ShowPokemon.html.twig', ['pokemon' => $pokemon]);
    }

    #[Route("/pokemons", name:"listpokemons")]
    public function getPokemons()
    {
        $pokemons = [
            [
                'name' => 'Bulbasaur',
                'id' => '001',
                'description' => 'Este Pokémon nace con una semilla en el lomo, que brota con el paso del tiempo.',
                'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/001.png'
            ],
            [
                'name' => 'Ivysaur',
                'id' => '002',
                'description' => 'Cuando le crece bastante el bulbo del lomo, pierde la capacidad de erguirse sobre las patas traseras.',
                'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/002.png'
            ],
            [
                'name' => 'Venusaur',
                'id' => '003',
                'description' => 'La planta florece cuando absorbe energía solar, lo cual le obliga a buscar siempre la luz del sol.',
                'image' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/003.png'
            ],
        ];
        return $this->render('pokemons/ListPokemons.html.twig', ['pokemons' => $pokemons]);
    }
}
