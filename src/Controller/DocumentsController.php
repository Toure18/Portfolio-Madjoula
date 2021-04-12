<?php

namespace App\Controller;

use App\Entity\Documents;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DocumentsController extends AbstractController
{
    /**
     * @Route("/documents", name="documents")
     */
    public function index(): Response
    {
        $document = $this->getDoctrine()
            ->getRepository(Documents::class)
            ->findAll();


        return $this->render('documents/index.html.twig', [
            'documents' => $document,
        ]);
    }
}
