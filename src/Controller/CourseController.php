<?php

namespace App\Controller;

use App\Entity\Course;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CourseController extends AbstractController
{
    /**
     * @Route("/course", name="course")
     */
    public function index(): Response
    {
        $course = $this->getDoctrine()
            ->getRepository(Course::class)
            ->findAll();


        return $this->render('course/index.html.twig', [
            'courses' => $course,
        ]);
    }
}
