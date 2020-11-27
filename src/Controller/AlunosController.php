<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Page;
use App\Entity\Aluno;


class AlunosController extends AbstractController
{

    /** 
     * @Route("/alunos", name="alunos_page")
     */
    public function index(): Response
    {
        $alunos = $this->getDoctrine()->getRepository(Aluno::class)->findAll();

        $page = new Page('Alunos', 'alunos_page', 'alunos');

        return $this->render($page->path_file, [
            'page' => $page,
            'alunos' => $alunos,
        ]);
    }

    /** 
     * @Route("/alunos/{id}", name="aluno_page")
     */
    public function aluno(int $id): Response
    {
        $aluno = $this->getDoctrine()->getRepository(Aluno::class)->find($id);

        $page = new Page($aluno->getNome(), 'aluno_page', 'alunos');

        return $this->render($page->path_file, [
            'page' => $page,
            'aluno' => $aluno,
        ]);
    }
}