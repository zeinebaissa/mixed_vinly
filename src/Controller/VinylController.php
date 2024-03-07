<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use function Symfony\Component\String\u;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VinylController extends AbstractController
{
    #[Route('/')]
    public function homepage() : Response{
        $tracks= [
            ['title' => 'Track 1', 'length' => '3:24'],
            ['title' => 'Track 2', 'length' => '4:02'],
            ['title' => 'Track 3', 'length' => '2:45'],
            ['title' => 'Track 4', 'length' => '3:45'],
            ['title' => 'Track 5', 'length' => '4:15'],

        ];

        return $this->render('vinyl/homepage.html.twig', [
            'tracks' => $tracks,'title' => 'Vinyl Shop',
        ]);
    }

    #[Route('/browse/{slug}')]
    public function browse(string $slug = null) : Response{
        if($slug){
            $title = 'Genre : '.u(str_replace('-', ' ', $slug))->title(true);
        }else{
            $title = 'All Genres';
        }
        return new Response($title);
    }
}
