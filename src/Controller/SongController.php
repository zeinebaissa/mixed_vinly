<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SongController extends AbstractController
{
    #[Route('/api/songs/{id<\d+>}', methods: ['GET'], name: 'api_songs_get_one')]

    public function getSong(int $id, LoggerInterface $logger): Response
    {

        $songs = [
            1 => ['name' => 'Set Fire To The Rain', 'url' => '/audio/Adele - set fire to the rain.mp3'],
            2 => ['name' => 'This Is The Life', 'url' => '/audio/Amy Macdonald  This Is The Life.mp3'],
            3 => ['name' => 'The Lazy Song', 'url' => '/audio/Bruno Mars - The Lazy Song.mp3'],
            4 => ['name' => 'Mockinggbird', 'url' => '/audio/Eminem - Mockingbird.mp3'],
            5 => ['name' => 'Price Tag', 'url' => '/audio/Jessie J - Price Tag.mp3'],
            6 => ['name' => 'I Got You', 'url' => '/audio/James Brown I Feel Good.mp3'],
            7 => ['name' => 'Dark Horse', 'url' => '/audio/Katy Perry - Dark Horse ft. Juicy J.mp3'],

        ];


        return $this->json($songs[$id]);
    }
}
