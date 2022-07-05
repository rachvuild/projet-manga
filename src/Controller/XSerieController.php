<?php

namespace App\Controller;

use App\Entity\Serie;
use App\Repository\SerieRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class XSerieController extends AbstractController
{
    /**
     * @Route("/List_series", name="app_series")
     */
    public function dysplaySeries(SerieRepository $SerieRepository)
    {
        $series = $SerieRepository->findAll();
        dd($series);
       
    }
    /**
     * @Route("/add_series", name="add_series")
     */
    public function addSeries(SerieRepository $SerieRepository)
    {
        $TitreSerie = $_POST['TitreSerie'];
        $TypeSerie = $_POST['TypeSerie'];
        $ImageSerie = $_POST['ImageSerie'];

        $serie = new Serie();
        $serie->setTitre($TitreSerie);
        $serie->settype($TypeSerie);
        $serie->setImage($ImageSerie);
        $series = $SerieRepository->add($serie);
        dd($series);
       
    }
    /**
     * @Route("/remove_series", name="remove_series")
     */
    public function removeSeries(SerieRepository $SerieRepository)
    {
        $idSerie = $_POST['idSerie'];
        $remove=$SerieRepository->find($idSerie);
      
        $series = $SerieRepository->remove($remove);
        dd($series);
       
    }

}
