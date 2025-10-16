<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ListarCategoriasController extends AbstractController
{
    #[Route('/listar/categorias', name: 'app_listar_categorias')]
    public function index(): Response
    {
        return $this->render('listar_categorias/index.html.twig', [
            'controller_name' => 'ListarCategoriasController',
        ]);
    }
}
