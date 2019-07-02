<?php

namespace App\DataFixtures;

use App\Entity\Event;
use App\Service\Slugger;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;


class EventFixtures extends Fixture implements DependentFixtureInterface
{
    private $slugger;
    /**
     * EventFixtures constructor
     * @param $slugger
     */
    public function __construct(Slugger $slugger)
{
    $this-> slugger = $slugger;
}

    public function load(ObjectManager $manager)
    {
        $event1 = new Event();
        $event1->setTitle("West Web Festival");
        $event1->setSlug($this->slugger->slugify($event1->getTitle()));
        $event1->setPicture("wwf.jpg");
        $event1->setDescription("Des rencontres exceptionnelles avec les entrepreneurs du web dans le cadre convivial des Vieilles Charrues.");
        $event1->setUser($this->getReference("user-admin"));
        $event1->setUrl("https://www.west-web-festival.fr");
        $event1->setDateStart(new\DateTime("2019-07-18"));
        $event1->setDateEnd(new\DateTime("2019-07-19"));
        $event1->setCity($this->getReference("city-carhaix"));
        $event1->addLanguage($this->getReference("french"));
        $event1->setPrice("100");
        $event1->setIsValid();
        $this->setReference("west-web-fest", $event1);

        $manager->persist($event1);

        $event2 = new Event();
        $event2->setTitle("Digital week");
        $event2->setSlug($this->slugger->slugify($event2->getTitle()));
        $event2->setPicture("dw.jpg");
        $event2->setDescription("Un programme riche d'évenements dédiés à l'univers de l'informatique et du web dans la capitale des Ducs de Bretagne.");
        $event2->setUser($this->getReference("user3"));
        $event2->setUrl("https://www.nantesdigitalweek.com");
        $event2->setDateStart(new \DateTime("2019-09-10"));
        $event2->setDateEnd(new \DateTime("2019-09-19"));
        $event2->setCity($this->getReference("city-nantes"));
        $event2->addLanguage($this->getReference("french"));
        $event2->addLanguage($this->getReference("english"));
        $event2->setPrice("150");
        $event2->setIsValid();
        $this->setReference("digital-week", $event2);

        $manager->persist($event2);

        $event3 = new Event();
        $event3->setTitle("La mêlée numérique");
        $event3->setSlug($this->slugger->slugify($event3->getTitle()));
        $event3->setPicture("melee.jpg");
        $event3->setDescription("Le rendez-vous incontournable des nouvelles technologies de l'information et de la communication au coeur de la Ville Rose.");
        $event3->setUser($this->getReference("user2"));
        $event3->setUrl("https://meleenumerique.com");
        $event3->setDateStart(new \DateTime("2019-09-30"));
        $event3->setDateEnd(new \DateTime("2019-10-07"));
        $event3->setCity($this->getReference("city-toulouse"));
        $event3->addLanguage($this->getReference("french"));
        $event3->addLanguage($this->getReference("english"));
        $event3->setPrice("0");
        $event3->setIsValid();
        $this->setReference("melee-numerique", $event3);

        $manager->persist($event3);

        $event4 = new Event();
        $event4->setTitle("Lengow Day");
        $event4->setSlug($this->slugger->slugify($event4->getTitle()));
        $event4->setPicture("lengow.jpg");
        $event4->setDescription("La première conférence internationale dédiée au e-commerce !");
        $event4->setUser($this->getReference("user5"));
        $event4->setUrl("https://lengow.com/lengowday");
        $event4->setDateStart(new \DateTime("2019-11-01"));
        $event4->setDateEnd(new \DateTime("2019-11-02"));
        $event4->setCity($this->getReference("city-paris"));
        $event4->addLanguage($this->getReference("french"));
        $event4->addLanguage($this->getReference("english"));
        $event4->addLanguage($this->getReference("italian"));
        $event4->addLanguage($this->getReference("german"));
        $event4->setPrice("80");
        $event4->setIsValid();
        $this->setReference("lengow", $event4);

        $manager->persist($event4);

        $event5 = new Event();
        $event5->setTitle("#GEN");
        $event5->setSlug($this->slugger->slugify($event5->getTitle()));
        $event5->setPicture("gen.jpg");
        $event5->setDescription(" Un indispensable panorama des différentes tendances, du développement web  à l'intelligence articificelle, dans le Grand Est.");
        $event5->setUser($this->getReference("user4"));
        $event5->setUrl("https://gen.grandestnumerique.org");
        $event5->setDateStart(new \DateTime("2019-12-12"));
        $event5->setDateEnd(new \DateTime("2019-12-13"));
        $event5->setCity($this->getReference("city-metz"));
        $event5->addLanguage($this->getReference("french"));
        $event5->addLanguage($this->getReference("german"));
        $event5->setPrice("200");
        $event5->setIsValid();
        $this->setReference("gen", $event5);

        $manager->persist($event5);

        $manager->flush();
    }


    /**
     *
     * @return array
     */

    public function getDependencies()
    {
            return [
                CityFixtures::class,
                UserFixtures::class,
                LanguageFixtures::class,
            ];
    }
}