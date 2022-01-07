<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;
use App\Entity\Entreprise;
use App\Entity\Stage;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {     
        //creation d'un generateur de données Faker
        $faker = \Faker\Factory::create('fr_FR');
       
        //---------ENTREPRISES-----------------//         
        $e1 = new Entreprise();
        $e1->setNom($faker->company());
        $e1->setAdresse($faker->address());
        $e1->setActivite($faker->catchPhrase());
        $e1->setSiteWeb($faker->domainName());
            
        $e2 = new Entreprise();
        $e2->setNom($faker->company());
        $e2->setAdresse($faker->address());
        $e2->setActivite($faker->catchPhrase());
        $e2->setSiteWeb($faker->domainName());
         
        $e3 = new Entreprise();
        $e3->setNom($faker->company());
        $e3->setAdresse($faker->address());
        $e3->setActivite($faker->catchPhrase());
        $e3->setSiteWeb($faker->domainName());

        $e4 = new Entreprise();
        $e4->setNom($faker->company());
        $e4->setAdresse($faker->address());
        $e4->setActivite($faker->catchPhrase());
        $e4->setSiteWeb($faker->domainName());

        $e5 = new Entreprise();
        $e5->setNom($faker->company());
        $e5->setAdresse($faker->address());
        $e5->setActivite($faker->catchPhrase());
        $e5->setSiteWeb($faker->domainName());

        $e6 = new Entreprise();
        $e6->setNom($faker->company());
        $e6->setAdresse($faker->address());
        $e6->setActivite($faker->catchPhrase());
        $e6->setSiteWeb($faker->domainName());

        $e7 = new Entreprise();
        $e7->setNom($faker->company());
        $e7->setAdresse($faker->address());
        $e7->setActivite($faker->catchPhrase());
        $e7->setSiteWeb($faker->domainName());

        $e8 = new Entreprise();
        $e8->setNom($faker->company());
        $e8->setAdresse($faker->address());
        $e8->setActivite($faker->catchPhrase());
        $e8->setSiteWeb($faker->domainName());
         
        // Regrouper les objets "Entreprise" dans un tableau pour pouuvoir s'y référer 
        // moment de la création d'un stage.
        $tabEntreprise = array($e1,$e2,$e3,$e4,$e5,$e6,$e7,$e8);
         
        foreach ($tabEntreprise as $entreprise) {
            // Enregistrememnt de l'entreprise crée
            $manager->persist($entreprise);
        }
       
        //-----------FORMATIONS-------------------//
       
        $f1 = new Formation();
        $f1->setNomCourt("DUT_Info");
        $f1->setNomLong("DUT_Informatique");
     

        $f2 = new Formation();
        $f2->setNomCourt("DUT_TC");
        $f2->setNomLong("DUT Techniques de Commercialisation");
     

        $f3 = new Formation();
        $f3->setNomCourt("LP CAA");
        $f3->setNomLong("LP Commercialisation Agrodistribution et Agroalimentaire");
  

        $f4 = new Formation();
        $f4->setNomCourt("BUT_Info");
        $f4->setNomLong("BUT_Informatique");
 

        $f4 = new Formation();
        $f4->setNomCourt("LP Evénementiel");
        $f4->setNomLong("LP Evénementiel");


        $f5 = new Formation();
        $f5->setNomCourt("LP MN");
        $f5->setNomLong("LP Métiers du Numérique");
 

        $tabFormation = array($f1,$f2,$f3,$f4,$f5);
         
        foreach ($tabFormation as $formation) {
            // Enregistrement de la formation créée
            $manager->persist($formation);
        }

        //---------STAGES-----------------//
        ///Stage 1
        $stage = new Stage();
        $i = 0;
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f1);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e1);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e1);

        ///Stage 2
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f1);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e2);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e2);

        ///Stage 3
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f2);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e3);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e3);

        ///Stage 4
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f2);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e4);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e4);

        ///Stage 5
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f2);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e8);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e8);

        ///Stage 6
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f3);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e5);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e5);

        ///Stage 7
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f4);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e6);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e6);

        ///Stage 8
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f4);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e1);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e1);

        ///Stage 9
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f5);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e7);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e7);
   
        ///Stage 9
        $stage = new Stage();
        $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
        $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
        $stage->setEmail($faker->companyEmail());
        // Creation de la relation Stage -> Formation
        $stage->addFormation($f5);
        //creation de la relation Stage --> Entreprise
        $stage->setEntreprise($e7);
    
        //Persister les objets modifiés
        $manager->persist($stage);
        $manager->persist($e7);
   
        /*    $nbStagesAGenerer = $faker->numberBetween($min = 0, $max = 3); Ca marche pas

        for($i=0 ; $i<=4 ;$i++) {
            //création de plusieurs stage par formations
            for($numStage=0 ; $numStage < $nbStagesAGenerer ; $numStage++) {
                $stage = new Stage();
                $i = 0;
                $stage->setTitre($faker->numerify('Stage ###')); //$faker->jobTitle() ne marche pas
                $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
                $stage->setEmail($faker->companyEmail());
                // Creation de la relation Stage -> Formation
                $stage->addFormation($tabFormation[$i]);
                // Définir et maj l'Entreprise
                $numEntreprise = $faker->numberBetween($min = 0, $max = 7);

                //creation de la relation Stage --> Entreprise
                $stage->setEntreprise($tabEntreprise[$numEntreprise]);
                // Creation relation Entreprise --> Stage
                $tabEntreprise[$numEntreprise]->addStage($stage);

                //Persister les objets modifiés
                $manager->persist($stage);
                $manager->persist($tabEntreprise[$numEntreprise]);
                }
        }
    */
        /*    //---------STAGES-----------------// Ca marche pas non plus
        for ($numStage=0 ;$numStage <= 2 ; $numStage++ ) {
            $stage = new Stage();
            $stage->setTitre($faker->jobTitle());
            $stage->setMission($faker->realText($maxNbChars = 5000, $indexSize = 2));
            $stage->setEmail($faker->companyEmail());
            // Création relation Stage --> Formation
            $stage->addFormation($formation);
            // Définir et maj l'Entreprise
            $numEntreprise = $faker->numberBetween($min = 28, $max = 21));
            //creation de la relation Stage --> Entreprise
            $stage->setEntreprise($tabEntreprise[$numEntreprise]);
            // Creation relation Entreprise --> Stage
            $tabEntreprise[$numEntreprise]->addStage($stage);

            //Persister les objets modifiés
            $manager->persist($stage);
            $manager->persist($tabEntreprise[$numEntreprise]);
        }
    */
        //Envoyer les données
        $manager->flush();
    }
}
