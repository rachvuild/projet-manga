<?php

namespace App\Controller;

use App\Repository\LivreRepository;
use App\Entity\Livre;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class xLivreController extends AbstractController
{
    /**
     * @Route("/List_Livre", name="app_Livre")
     */
    public function dysplayLivres(LivreRepository $LivreRepository)
    {
        $livre = $LivreRepository->findAll();
    }
    /**
     * @Route("/Add_Livre", name="Add_Livre")
     */
    public function addLivres(LivreRepository $LivreRepository)
    {
        $TitreLivre = $_POST['TitreLivre'];
        $SoutitreLivre = $_POST['SoutitreLivre'];
        $DescriptionLivre = $_POST['DescriptionLivre'];
        $livre = new Livre();
       $livre =$livre->setTitre($TitreLivre);
       $livre =$livre->setSoutitre($SoutitreLivre);
       $livre =$livre->setDescription($DescriptionLivre);
        $livre = $LivreRepository->add($livre);
        dd($livre);
    }
    /**
     * @Route("/remove_Livre", name="remove_Livre")
     */
    public function removeLivres(LivreRepository $LivreRepository)
    {
        $IdLivre = $_POST['IdLivre'];
        $livre= $LivreRepository->find($IdLivre);
        $livre = $LivreRepository->remove($livre);
        dd($livre);
    }
 
}
