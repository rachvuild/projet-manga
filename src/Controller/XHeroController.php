<?php

namespace App\Controller;

use App\Repository\HeroRepository;
use App\Entity\Hero;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class XHeroController extends AbstractController
{
    /**
     * @Route("/List_heros", name="list_heros")
     */
    public function dysplayHeros(HeroRepository $heroRepository)
    {
        $heros = $heroRepository->findAll();
        // dd($heros);
        return $this->render("hero/index.html.twig" , [
            "heros" => $heros,
        ]) ;
    }
    /**
     * @Route("/add_hero", name="add_heros")
     */
    public function addHeros(HeroRepository $heroRepository)
    {
        $NomHero = $_POST['NomHero'];
        $PuissanceHero = $_POST['PuissanceHero'];
        
        $hero = new Hero();
        $heros=$hero->setNom($NomHero);
        $heros=$hero->setPuissance($PuissanceHero);

        $hero = $heroRepository->add($heros, true);
        
        // dd($heros);
    }
    /**
     * @Route("/remove_hero", name="remove_heros")
     */
    public function removeHeros(HeroRepository $heroRepository)
    {
        $IdHero = $_POST['IdHero'];
        $hero= $heroRepository->find($IdHero);
        $hero = $heroRepository->remove($hero, true);
        
        // dd($hero);
    }
}
