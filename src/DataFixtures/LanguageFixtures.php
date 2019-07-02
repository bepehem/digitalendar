<?php

namespace App\DataFixtures;

use App\Entity\Language;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class LanguageFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $language1 = new Language();
        $language1 ->setName("Français");
        $this->setReference("french", $language1);
        $manager->persist($language1);

        $language2 = new Language();
        $language2 ->setName("English");
        $this->setReference("english", $language2);
        $manager->persist($language2);

        $language3 = new Language();
        $language3 ->setName("Italiano");
        $this->setReference("italian", $language3);
        $manager->persist($language3);

        $language4 = new Language();
        $language4 ->setName("Deutsch");
        $this->setReference("german", $language4);
        $manager->persist($language4);

        $manager->flush();
    }
}
