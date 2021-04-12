<?php

namespace App\Controller;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Services\MailerService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function index( Request $request, MailerService $mailerService): Response
    {
        // just setup a fresh $task object (remove the example data)
        $contact = new Contact();

        $form = $this->createForm(ContactType::class, $contact);

        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $contact = $form->getData();
            $mailerService->send( "Nouveau Message", $contact->getMail(), $contact->getMail(),"madjoula.alternance@gmail.com", "contact/mail.html.twig", [
                "name"=>$contact->getName(),
                "mail"=>$contact->getMail(),
                "compagny_name"=>$contact->getCompagnyName(),
                "body_text"=>$contact->getBodyText(),
                'form' => $form->createView()
            ]  );
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($contact);
            $entityManager->flush();


            $this->addFlash('success', 'Votre demande à bien étais envoyer, Madjoula vous répondra au plus vite !');
            return $this->redirectToRoute('contact');
        }
        return $this->render('contact/index.html.twig', [
            'form' => $form->createView()
        ]);
    }
}
