<?php

namespace App\Controller;

use App\Entity\Event;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage", methods={"GET"})
     */
    public function show() : Response
    {
        $events =$this->getDoctrine()->getRepository(Event::class)->findAll();

        return $this->render('default/homepage.html.twig', [
            'events'=>$events
        ]);
    }
}
