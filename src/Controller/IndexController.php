<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{
    /**
     * Homepage
     *
     * @return Response
     */
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        
        return $this->render('pages/home.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
    /**
     * Portfolio page
     *
     * @return Response
     */
    #[Route('/portfolio', name: 'portfolio')]
    public function portfolio(): Response
    {
        return $this->render('pages/portfolio.html.twig', [
            'controller_name' => 'IndexController',
        ]);
    }
}
