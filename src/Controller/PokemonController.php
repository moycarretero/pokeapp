<?php

namespace App\Controller;

use App\Entity\Pokemon;
use App\Entity\Debilidad;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Form\PokemonType;
use Symfony\Component\HttpFoundation\Request;

class PokemonController extends AbstractController
{
    #[Route('/pokemon/{id}', name: "show_pokemon")]

    public function getPokemon($id, EntityManagerInterface $doctrine)
    {
        $repositorio = $doctrine->getRepository(Pokemon::class);
        $pokemon = $repositorio->find($id);

        return $this->render('pokemons/ShowPokemon.html.twig', [
            'pokemon' => $pokemon,
        ]);
    }

    #[Route("/pokemons", name: "list_de_pokemons")]
    public function getPokemons(EntityManagerInterface $doctrine)
    {
        $repositorio = $doctrine->getRepository(Pokemon::class);
        $pokemons = $repositorio->findAll();



        return $this->render('pokemons/listPokemons.html.twig', ['pokemons' => $pokemons]);
    }

    #[Route("/react/pokemons")]
    public function reactPokemons()
    {
        return $this->render("pokemons/reactPokemons.html.twig");
    }

    #[Route("/new/pokemon", name: "new_pokemon")]
    public function createPokemon(Request $request, EntityManagerInterface $doctrine)
    {
        $form = $this->createForm(PokemonType::class);
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $pokemon = $form->getData();
            $doctrine->persist($pokemon);
            $doctrine->flush();
             $this-> addFlash('success', 'Pokemon creado correctamente'); 
            return $this->redirectToRoute('list_de_pokemons');
        }
        return $this->renderForm('pokemons/createPokemon.html.twig', ['pokemonForm' => $form]);
    }


    #[Route("/insert/pokemons")]
    public function insertPokemon(EntityManagerInterface $doctrine)
    {
        $debilidad1 = new Debilidad();
        $debilidad1->setNombre('Fuego');

        $debilidad2 = new Debilidad();
        $debilidad2->setNombre('Agua');

        $debilidad3 = new Debilidad();
        $debilidad3->setNombre('Veneno');

        $debilidad4 = new Debilidad();
        $debilidad4->setNombre('Electricidad');







        $pokemon1 = new Pokemon();
        $pokemon1->setNombre('Pichu');
        $pokemon1->setDescripcion('Un Pokémon bondadoso y compasivo al que le resulta imposible dar la espalda a Pokémon o humanos que se encuentren a la deriva.');
        $pokemon1->setImagen('https://assets.pokemon.com/assets/cms2/img/pokedex/full/149.png');
        $pokemon1->setCodigo('149');
        $pokemon1->addDebilidade($debilidad1);
        $pokemon1->addDebilidade($debilidad2);

        $pokemon2 = new Pokemon();
        $pokemon2->setNombre('Dragonite');
        $pokemon2->setDescripcion('A pesar de su pequeño tamaño, puede soltar descargas capaces de electrocutar a un adulto, si bien él también acaba sobresaltado.');
        $pokemon2->setImagen('https://assets.pokemon.com/assets/cms2/img/pokedex/full/172.png');
        $pokemon2->setCodigo('172');
        $pokemon2->addDebilidade($debilidad3);
        $pokemon2->addDebilidade($debilidad4);
        $doctrine->persist($pokemon1);
        $doctrine->persist($pokemon2);

        $doctrine->persist($debilidad1);
        $doctrine->persist($debilidad2);
        $doctrine->persist($debilidad3);
        $doctrine->persist($debilidad4);



        $doctrine->flush();

        return new Response("insertados correctamente");
    }
}
