<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class NovaCategoriaController extends AbstractController
{
    #[Route('/nova/categoria', name: 'app_nova_categoria')]
    public function index(): Response
    {
        return $this->render('nova_categoria/index.html.twig', [
            'controller_name' => 'NovaCategoriaController',
        ]);
    }
}
