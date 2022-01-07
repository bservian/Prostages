<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\Stage;
use App\Entity\Formation;
use App\Entity\Entreprise;

class ProstagesController extends AbstractController
{
    public function index(): Response
    {
        //recuperer le repository de l'netité Ressource
        $repositoryRessource = $this->getDoctrine()->getRepository(Stage::class);
        //recuperer  les ressources enregistrées en BD
        $stages = $repositoryRessource->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher

        return $this->render('prostages/index.html.twig',
         ['stages' => $stages]);
    }

    public function entreprise(): Response
    {
        //recuperer le repository de l'netité Ressource
        $repositoryRessource = $this->getDoctrine()->getRepository(Entreprise::class);
        //recuperer  les ressources enregistrées en BD
        $entreprises = $repositoryRessource->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('prostages/entreprise.html.twig',
         ['entreprises' => $entreprises]);
        
    }

    public function formations(): Response
    {
        //recuperer le repository de l'netité Ressource
        $repositoryRessource = $this->getDoctrine()->getRepository(Formation::class);
        //recuperer  les ressources enregistrées en BD
        $formations = $repositoryRessource->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('prostages/formations.html.twig',
         ['formations' => $formations]);

    }
    
    public function stage($id): Response
    {
        return $this->render('prostages/stage.html.twig', [
            'controller_name' => $id,
        ]);
    }
}
