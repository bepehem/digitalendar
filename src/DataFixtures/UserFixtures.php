<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

class UserFixtures extends Fixture
{
    private $encoder;

    public function __construct(UserPasswordEncoderInterface $encoder)
    {
        $this->encoder=$encoder;
    }

    public function load(ObjectManager $manager)
    {
        $admin = new User();
        $admin->setUsername("Gary");
        $admin->setEmail("g.cooper@gmail.com");
        $admin->setPassword($this->encoder->encodePassword($admin,"1234"));
        $admin->setRoles(['ROLE_ADMIN']);
        $this->setReference("user-admin",$admin);
        $manager->persist($admin);

        $user2 = new User();
        $user2->setUsername("Marilyn");
        $user2->setEmail("m.monroe@yahoo.fr");
        $user2->setPassword($this->encoder->encodePassword($user2,"1234"));
        $user2->setRoles(['ROLE_USER']);
        $this->setReference("user2",$user2);
        $manager->persist($user2);

        $user3 = new User();
        $user3->setUsername("Liz");
        $user3->setEmail("e.taylor@orange.fr");
        $user3->setPassword($this->encoder->encodePassword($user3,"1234"));
        $user3->setRoles(['ROLE_USER']);
        $this->setReference("user3",$user3);
        $manager->persist($user3);

        $user4 = new User();
        $user4->setUsername("Marlon");
        $user4->setEmail("m.brando@laposte.fr");
        $user4->setPassword($this->encoder->encodePassword($user4,"1234"));
        $user4->setRoles(['ROLE_USER']);
        $this->setReference("user4",$user4);
        $manager->persist($user4);

        $user5 = new User();
        $user5->setUsername("Tony");
        $user5->setEmail("a.curtis@gmail.com");
        $user5->setPassword($this->encoder->encodePassword($user5,"1234"));
        $user5->setRoles(['ROLE_USER']);
        $this->setReference("user5",$user5);
        $manager->persist($user5);

        $manager->flush();
    }
}
