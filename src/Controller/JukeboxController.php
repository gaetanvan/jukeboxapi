<?php

namespace App\Controller;

use App\Service\CallApiService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class JukeboxController extends AbstractController
{

    #[Route('/', name: 'app_jukebox')]
    public function index(): Response
    {
        return $this->render('jukebox/index.html.twig', [
            'controller_name' => 'JukeboxController',
        ]);
    }
}
