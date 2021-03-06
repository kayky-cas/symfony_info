<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Page;

class HomeController extends AbstractController
{

    /** 
     * @Route("/", name="home_page")
     */
    public function index(): Response
    {
        $page = new Page('Página Inicial', 'home_page', 'home');

        return $this->render($page->path_file, [
            'page' => $page,
        ]);
    }
}