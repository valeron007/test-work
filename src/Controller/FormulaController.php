<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Formuls;

class FormulaController extends AbstractController
{
    /**
     * @Route("/formula", name="formula")
     */
    public function index()
    {
    	$formuls = new Formuls();


        return $this->render('formula/formuls.html.twig', [
            'controller_name' => 'FormulaController',
        ]);
    }
}
