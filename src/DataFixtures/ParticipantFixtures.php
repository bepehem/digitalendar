<?php

namespace App\DataFixtures;

use App\Entity\Participant;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class ParticipantFixtures extends Fixture implements DependentFixtureInterface
{
    public function load(ObjectManager $manager)
    {
        $participant1 = new Participant();
        $participant1 ->setCreatedAt(new \DateTime("2019-05-30"));
        $participant1->setUser($this->getReference("user-admin"));
        $participant1->setEvent($this->getReference("lengow"));
        $manager->persist($participant1);

        $participant2 = new Participant();
        $participant2 ->setCreatedAt(new \DateTime("2019-02-25"));
        $participant2->setUser($this->getReference("user2"));
        $participant2->setEvent($this->getReference("west-web-fest"));
        $participant2->setEvent($this->getReference("lengow"));
        $manager->persist($participant2);

        $participant3 = new Participant();
        $participant3 ->setCreatedAt(new \DateTime("2019-02-07"));
        $participant3->setUser($this->getReference("user3"));
        $participant3->setEvent($this->getReference("melee-numerique"));
        $manager->persist($participant3);

        $participant4 = new Participant();
        $participant4 ->setCreatedAt(new \DateTime("2019-01-11"));
        $participant4->setUser($this->getReference("user4"));
        $participant4->setEvent($this->getReference("digital-week"));
        $participant4->setEvent($this->getReference("gen"));
        $manager->persist($participant4);

        $participant5 = new Participant();
        $participant5 ->setCreatedAt(new \DateTime("2018-10-28"));
        $participant5->setUser($this->getReference("user5"));
        $participant5->setEvent($this->getReference("gen"));
        $participant5->setEvent($this->getReference("west-web-fest"));
        $manager->persist($participant5);

        $manager->flush();
    }

    public function getDependencies()
    {
        return [
            EventFixtures::class,
            UserFixtures::class
        ];
    }
}
