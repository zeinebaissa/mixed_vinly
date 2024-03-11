<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;

class VinylController  extends AbstractController
{
    #[Route("/", name: 'app_homepage')]
    public function homepage(): Response
    {
        $tracks = [
            ['song' => 'Set Fire To The Rain', 'artist' => 'Adele'],
            ['song' => 'This Is The Life', 'artist' => 'Amy Macdonald'],
            ['song' => 'The Lazy Song', 'artist' => 'Bruno Mars'],
            ['song' => 'Mockinggbird', 'artist' => 'Eminem'],
            ['song' => 'Price Tag', 'artist' => 'Jessie J'],
            ['song' => 'I Got You', 'artist' => 'James Brown'],
            ['song' => 'Dark Horse', 'artist' => 'Katy Perry'],

        ];
        return $this->render('vinyl/homepage.html.twig', [
            'title' => 'PB & Jams',
            'tracks' => $tracks,
        ]);
    }
    #[Route('/browse/{slug}', name: 'app_browse')]

    public function browse($slug = null): Response
    {
        $genre  = $slug ? 'Genre: ' . u(str_replace('-', ' ', $slug))->title(true) : null;

        return $this->render('vinyl/browse.html.twig', [
            'genre' => $genre,
        ]);
    }
}
