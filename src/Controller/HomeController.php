<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use aharen\OMDbAPI;
class HomeController extends AbstractController
{
    #[Route('/', name: 'app_home')]
    public function index(): Response
    {




$omdb = new OMDbAPI('2b0d6447a6f7991f67beed0bb53baac0');

$movie=$omdb->search('eternal');
//  https://image.tmdb.org/t/p/w300/   => pour access img poster
//dd($movie->data->results[0]->poster_path);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'movie'=>$movie->data->results[1]
        ]);
    }
}