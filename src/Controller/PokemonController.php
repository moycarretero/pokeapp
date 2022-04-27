<?php

namespace App\Controller;

use App\Entity\Pokemon;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
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
    public function getPokemons(EntityManagerInterface $doctrine)
    {
      $repositorio = $doctrine->getRepository(Pokemon::class);
      $pokemons = $repositorio->findAll();
      


        
      
        return $this -> render('pokemons/listPokemons.html.twig',['pokemons'=> $pokemons]);
    }

    #[Route("/react/pokemons")]
    public function reactPokemons()
    {
        return $this->render("pokemons/reactPokemons.html.twig");
    }

    #[Route("/insert/pokemons")]
    public function insertPokemons(EntityManagerInterface $doctrine)
    {
        $pokemon1 = new Pokemon();
        $pokemon1 -> setNombre('Dragonite');
        $pokemon1 -> setDescripcion('Un Pokémon bondadoso y compasivo al que le resulta imposible dar la espalda a Pokémon o humanos que se encuentren a la deriva.');
        $pokemon1 -> setImagen('https://assets.pokemon.com/assets/cms2/img/pokedex/full/149.png');
        $pokemon1 -> setCodigo('149');


        $pokemon2 = new Pokemon();
        $pokemon2 -> setNombre('Pichu');
        $pokemon2 -> setDescripcion('A pesar de su pequeño tamaño, puede soltar descargas capaces de electrocutar a un adulto, si bien él también acaba sobresaltado.');
        $pokemon2 -> setImagen('https://assets.pokemon.com/assets/cms2/img/pokedex/full/172.png');
        $pokemon2 -> setCodigo('172');

        $doctrine-> persist($pokemon1);
        $doctrine-> persist($pokemon2);
        $doctrine ->flush();
        
        return new Response("insertados correctamente");
    }

}








 /*  $pokemons = [
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
        ]; */
