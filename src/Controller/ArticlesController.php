<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    public $articles = [
        '1' => [
            'id' => 1,
            'published' => 'yes',
            'title' => 'Politique',
            'color' => 'yellow',
            'content' => 'Analyse de la crise par David'
        ],
        '2' => [
            'id' => 2,
            'published' => 'yes',
            'title' => 'Economie',
            'color' => 'red',
            'content' => 'Flambée des prix de l\'essence'
            ],
        '3' => [
            'id' => 3,
            'published' => 'no',
            'title' => 'Social',
            'color' => 'blue',
            'content' => 'Retour des Pokémon'
            ],
        '4' => [
            'id' => 4,
            'published' => 'yes',
            'title' => 'Fait Divers',
            'color' => 'green',
            'content' => 'Un lapin tue un chasseur'
            ],
];

    #[Route("/articles", name: "articles")]

    public function viewArticles() {
        return $this->render("ArticlesViewer.html.twig", [
            'articles' => $this->articles
        ]);
    }
}