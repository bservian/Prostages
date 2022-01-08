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

    public function entreprises(): Response
    {
        //recuperer le repository de l'netité Ressource
        $repositoryRessource = $this->getDoctrine()->getRepository(Entreprise::class);
        //recuperer  les ressources enregistrées en BD
        $entreprises = $repositoryRessource->findAll();
        //Envoyer les ressources récupérées à la vue chargée de les afficher
        return $this->render('prostages/entreprises.html.twig',
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
        //recuperer le repository de l'entité Stage
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        //recuperer  les stages enregistrées en BD
        $stage = $repositoryStage->find($id);


        return $this->render('prostages/stage.html.twig', ['stage' => $stage]);
    }

    public function entreprise($id): Response
    {
        //recuperer le repository de l'entité Entreprise et Stage
        $repositoryEntreprise = $this->getDoctrine()->getRepository(Entreprise::class);
        $repositoryStage = $this->getDoctrine()->getRepository(Stage::class);
        //recuperer  les entreprises et leurs stages enregistrées en BD
        $entreprise = $repositoryEntreprise->find($id);
        $listeStages = $repositoryStage->findBy(["entreprise"=>$id]);


        return $this->render('prostages/entreprise.html.twig', ['entreprise' => $entreprise , "listeStages" => $listeStages]);
    }

    public function formation($id): Response
    {
        //recuperer le repository de l'entité Formation
        $repositoryFormation = $this->getDoctrine()->getRepository(Formation::class);
       
        //recuperer  les stages enregistrées en BD
        $formation = $repositoryFormation->find($id);


        return $this->render('prostages/formation.html.twig', ['formation' => $formation]);
    }

   
}
