<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DafaultController extends AbstractController
{
    #[Route('/dafault', name: 'app_dafault')]
    public function index(): Response
    {
        return $this->render('main/dafault/index.html.twig', []);
    }
}
 