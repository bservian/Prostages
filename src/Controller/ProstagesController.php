<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ProstagesController extends AbstractController
{
    public function index(): Response
    {
        return $this->render('prostages/index.html.twig', [
            'controller_name' => 'ProstagesController',
        ]);
    }

    public function entreprise(): Response
    {
        return $this->render('prostages/entreprise.html.twig', [
            'controller_name' => 'ProstagesController',
        ]);
    }

    public function formations(): Response
    {
        return $this->render('prostages/formations.html.twig', [
            'controller_name' => 'ProstagesController',
        ]);
    }
    
    public function stage($id): Response
    {
        return $this->render('prostages/stage.html.twig', [
            'controller_name' => $id,
        ]);
    }
}
