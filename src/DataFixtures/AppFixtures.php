<?php

namespace App\DataFixtures;


use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Formation;
class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        // $product = new Product();
        // $manager->persist($product);

        $DUT_Informatique = new Formation();
        $DUT_Informatique->setNomCourt("DUT_Info");
        $DUT_Informatique->setNomLong("DUT_Informatique");
        $manager->persist($DUT_Informatique);
        $manager->flush();
    }
}
