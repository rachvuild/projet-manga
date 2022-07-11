<?php

namespace App\Controller;

use App\Entity\Hero;

use App\Repository\HeroRepository;
use Doctrine\ORM\EntityManagerInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\IsGranted;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
 * @Route("/opening")
 */
class OpeningController extends AbstractController
{
      /**
     * @Route("/", name="app_opening_index", methods={"GET"})
     * @IsGranted("ROLE_USER")
     */
    public function index(HeroRepository $HeroRepository): Response
    {
        $heros = $HeroRepository->findAll();
     
        return $this->renderForm('home/opening.html.twig', [
            'heros' => $heros,
            
        ]);
    }

    
}
