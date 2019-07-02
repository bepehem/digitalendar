<?php

namespace App\DataFixtures;

use App\Entity\City;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class CityFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $city1 = new City();
        $city1->setName("Nantes");
        $this->setReference("city-nantes", $city1);
        $manager->persist($city1);

        $city2 = new City();
        $city2->setName("Carhaix");
        $this->setReference("city-carhaix", $city2);
        $manager->persist($city2);

        $city3 = new City();
        $city3->setName("Toulouse");
        $this->setReference("city-toulouse", $city3);
        $manager->persist($city3);

        $city4 = new City();
        $city4->setName("Paris");
        $this->setReference("city-paris", $city4);
        $manager->persist($city4);


        $city5 = new City();
        $city5->setName("Metz");
        $this->setReference("city-metz", $city5);
        $manager->persist($city5);

        $manager->flush();
    }
}
