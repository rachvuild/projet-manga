<?php

namespace App\Controller;

use App\Repository\HeroRepository;
use App\Repository\SerieRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @Route("/index", name="app_index")
     */
    public function index(): Response
    {

        // Rendu d'une vue avec transmission des variables : 
        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
    /**
     * @Route("/home", name="app_home")
     */
    public function home(SerieRepository $serieRepo): Response
    {
        $series = $serieRepo->findAll(); 

        // Rendu d'une vue avec transmission des variables : 
        return $this->render('home/homeBody.html.twig', [
            'controller_name' => 'HomeController',
            'series' => $series,
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
