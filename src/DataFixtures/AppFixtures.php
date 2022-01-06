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
        // $product = new Product();
        // $manager->persist($product);

        //creation d'un generateur de données Faker
        $faker = \Faker\Factory::create('fr_FR');

        //-----------FORMATIONS-------------------//
       
        $formation = new Formation();
        $formation->setNomCourt("DUT_Info");
        $formation->setNomLong("DUT_Informatique");
        $manager->persist($formation);


        
        //---------ENTREPRISES-----------------//
        $nbEntreprises = 10;
       
        for ($i=1 ;$i <= $nbEntreprises ; $i++ ) {
            // Création d'une nouvelle entreprise
            $entreprise = new Entreprise();
            // Génération du nom
            $entreprise->setNom($faker->company());
            // Génération de l'adresse
            $entreprise->setAdresse($faker->address());
            // Génération de l'activite de l'entreprise
            $entreprise->setActivite($faker->catchPhrase());
            // Génération du site web de l'entreprise
            $entreprise->setSiteWeb($faker->companyEmail());
           
            // Enregistrememnt de l'entreprise crée
            $manager->persist($entreprise);
        }
        



        //Envoyer les données
        $manager->flush();
    }
}
