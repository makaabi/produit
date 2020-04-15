<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class DemoController extends AbstractController
{


    /** 
     * @Route("/demo",name="demo")
    */
    

    public function index()
    {

        return $this->render('demo/index2.html.twig', [
            'controller_name' => 'DemoController',
            

        ]);
    }



     /** 
     * @Route("/user{username}",name="user_name")
    */
    

    public function index2($username)
    {

        return $this->render('demo/index2.html.twig', [
            'nom' => $username
            

        ]);
    }
}