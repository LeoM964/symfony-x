<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class ListarProdutosController extends AbstractController
{
    #[Route('/algumacoisa/produtos', name: 'app_listar_produtos')]
    public function index(): Response
    {
        return $this->render('listar_produtos/index.html.twig', [
            'controller_name' => 'ListarProdutosController',
        ]);
    }
}
