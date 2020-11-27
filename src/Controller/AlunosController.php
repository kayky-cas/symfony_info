<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Page;

class AlunosController extends AbstractController
{

    /** 
     * @Route("/alunos", name="alunos_page")
     */
    public function index(): Response
    {
        $page = new Page('Alunos', 'alunos_page', 'alunos');

        return $this->render($page->path_file, [
            'page' => $page,
        ]);
    }
}