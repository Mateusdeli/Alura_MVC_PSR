<?php

namespace Alura\Cursos\Controllers;

use Doctrine\ORM\EntityManagerInterface;
use Nyholm\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

class InserirCursoController implements RequestHandlerInterface {

    private EntityManagerInterface $entityManagerInterface;

    public function __construct(EntityManagerInterface $entityManagerInterface) {
        $this->entityManagerInterface = $entityManagerInterface;
    }

    public function handle(ServerRequestInterface $request): ResponseInterface
    {
        $data = "Mateus";
        return new Response(200, ['Location: /login'], $data);
    }

}