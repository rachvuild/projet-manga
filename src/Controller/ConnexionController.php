<?php

namespace App\Controller;

use App\Entity\User;
use App\Controller\UserController;
use App\Repository\UserRepository;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\BrowserKit\Response;
use Symfony\Component\HttpFoundation\Response as HttpFoundationResponse;

 /**
     * @Route("/connexion")
     */
class ConnexionController extends AbstractController
{

      /**
     * @Route("/", name="app_connexion_connexion", methods={"GET" , "POST"})
     */ 
    public function Connexion(UserRepository $UserRepository): HttpFoundationResponse
    {
        // $userObj = new User();
        $UserController = new UserController();
        
        // dd($_POST);
        $login = $_POST['login'];
        $password = $_POST['password'];
       $user = $UserRepository->findOneBy([
        'login'=> $login,
        'password'=> $password,
    ]);

    if ($user != null){
        // $user=array(
        //     'id' => $user->getid(),
        //     'login'=>$user->getLogin(),
        //     'password' => $user->getPassword(),
        //     'email'=> $user->getEmail(),

        // );
       return $UserController->show($user);
    }
    
      
        // foreach ($userObj as $user){
        //     if ($this->Connexion->$login = $user->getlogin() and $this->Connexion->$password = $user->getlogin()){

        //         dd('cool !!');
        //         $UserController->show($user);
        //     }

        // }
        // dd(' pas cool !!');



       


        // $connexion_user = "SELECT * FROM `user` WHERE login ='$login' AND password ='$password'";
        // $connexion_user=$pdo->prepare($connexion_user);
      return $this->redirectToRoute('app_user_connexion');
    }
  
 
}
