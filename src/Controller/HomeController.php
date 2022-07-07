<?php

namespace App\Controller;

use App\Repository\HeroRepository;
use App\Repository\LivreRepository;
use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

  /**
     * @Route("/")
     */
class HomeController extends AbstractController
{
    
    /**
     * @Route("/", name="app_home")
     */
    public function home(SerieRepository $serieRepo, LivreRepository $livreRepo): Response
    {
        $livres = $livreRepo->findAll();
        $series = $serieRepo->findAll(); 

        // Rendu d'une vue avec transmission des variables : 
        return $this->render('home/home.html.twig', [
            'controller_name' => 'HomeController',
            'series' => $series,
            'livres' => $livres,
        ]);
    }
    /**
     * @Route("/cardhero", name="app_cardhero")
     */
    public function cardhero(HeroRepository $heroRepo): Response
    {

        $heros = $heroRepo->findAll();
      

        // Rendu d'une vue avec transmission des variables : 
        return $this->render('home/cardHero.html.twig', [
            'controller_name' => 'HomeController',
            'heros' => $heros,
           
        ]);
    }

     /**
     * @Route("/series", name="app_series")
     */
    public function showSeries(SerieRepository $serieRepo): Response
    {
        // Déclaration variables / données : 
        $series = $serieRepo->findAll(); 

        // Traitement : 
        
       // dd($series);

        // Rendu d'une vue avec transmission des variables : 
        return $this->render('home/series.html.twig', [
            'controller_name' => 'HomeController',
            'series' => $series,
        ]);
    }
}
