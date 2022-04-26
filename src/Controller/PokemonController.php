<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PokemonController extends AbstractController{

#[Route('/pokemon')]

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

}