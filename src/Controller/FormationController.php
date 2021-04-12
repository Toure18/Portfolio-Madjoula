<?php

namespace App\Controller;

use App\Entity\Formations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class FormationController extends AbstractController
{
    /**
     * @Route("/formation", name="formation")
     */
    public function index(): Response
    {
        $formation = $this->getDoctrine()
            ->getRepository(Formations::class)
            ->findAll();


        return $this->render('formation/index.html.twig', [
            'formations' => $formation,
        ]);
    }
}
