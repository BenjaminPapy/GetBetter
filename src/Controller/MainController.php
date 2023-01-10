<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function homepage(): Response
    {
        return $this->render('main/homepage.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/imc", name="imc")
     */
    public function imc(): Response
    {
        return $this->render('main/imc.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/metabolisme-basal", name="metabolisme-basal")
     */
    public function metabase(): Response
    {
        return $this->render('main/metabase.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }

    /**
     * @Route("/macronutriments", name="macronutriments")
     */
    public function macronutr(): Response
    {
        return $this->render('main/macronutr.html.twig', [
            'controller_name' => 'MainController',
        ]);
    }
}