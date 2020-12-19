<?php

namespace Alura\Cursos\Controllers;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface IProcessaRequisicao {
    public function processaRequisicao(ServerRequestInterface $request): ResponseInterface;
}