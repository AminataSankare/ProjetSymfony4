<?php

namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BiensController extends Controller
{
    /**
     * @Route("/biens", name="biens")
     */
    public function index()
    {
        return $this->render('biens/index.html.twig', [
            'controller_name' => 'BiensController',
        ]);
    }
}
