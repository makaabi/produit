<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;



class ProduitController extends AbstractController
{


    /** 
     * @Route("/produit",name="prod_route")
    */
    

    public function index()
    {

        return $this->render('produit/index.html.twig', [
            'controller_name' => 'ProduitController',
            

        ]);
    }

    public function produit($a,$b)
    {

        return $this->render('produit/produit.html.twig', [
            'op1' => $a,
            'op2' => $b,
            'produit' => $a*$b
            

        ]);
    }


     
}