<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController{

#[Route('/pokemon',name:'pokemon')]

public function getPokekmon()
{
$pokemon =[
'nombre'=>'Charmander',
'description' => 'It has a preference for hot things. When it rains, steam is said to spout from the tip of its tail.',
'img' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png',
'id'=> '004'

]; 
return $this->render('pokemons/ShowPokemon.html.twig', ['pokemon'=>$pokemon]);

}
#[Route('/pokemons',name:'listado_pokemons')]
public function pokemons()
{
$pokemons = [
    [
        'nombre'=>'Charmander',
        'description' => 'It has a preference for hot things. When it rains, steam is said to spout from the tip of its tail.',
        'img' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/004.png',
        'id'=> '004'
        
    ],
    [
        'nombre'=>'Butterfree',
        'description' => 'In battle, it flaps its wings at great speed to release highly toxic dust into the air.',
        'img' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/012.png',
        'id'=> '012'
        
    ],
    [
        'nombre'=>'Meowth',
        'description' => 'It has a preference for hot things. When it rains, steam is said to spout from the tip of its tail.',
        'img' => 'https://assets.pokemon.com/assets/cms2/img/pokedex/full/052.png',
        'id'=> '052'
        
        ]
    ];

    return $this->render('pokemons/Listpokemons.html.twig',['pokemons'=> $pokemons]);
}

}