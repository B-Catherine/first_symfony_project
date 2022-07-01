<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ArticlesController extends AbstractController
{
    public array $articles = [
        '1' => [
            'id' => 1,
            'published' => true,
            'title' => 'Politique',
            'color' => 'yellow',
            'content' => 'Analyse de la crise par David'
        ],
        '2' => [
            'id' => 2,
            'published' => true,
            'title' => 'Economie',
            'color' => 'red',
            'content' => 'Flambée des prix de l\'essence'
            ],
        '3' => [
            'id' => 3,
            'published' => false,
            'title' => 'Social',
            'color' => 'blue',
            'content' => 'Retour des Pokémon'
            ],
        '4' => [
            'id' => 4,
            'published' => true,
            'title' => 'Fait Divers',
            'color' => 'green',
            'content' => 'Un lapin tue un chasseur'
            ]
];

    #[Route("/articles", name: "articles")]

    public function viewArticles() {
        return $this->render("ArticlesViewer.html.twig", [
            'articles' => $this->articles
        ]);
    }
}