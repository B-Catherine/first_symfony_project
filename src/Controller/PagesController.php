<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PagesController extends AbstractController
{
    #[Route("/", name: 'home')]

    function homePage() {
        return $this->render("Home.html.twig");
    }
}