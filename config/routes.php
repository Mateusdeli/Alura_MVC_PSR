<?php

use Alura\Cursos\Controllers\{
    AdicionarCursoController,
    EditarCursoController,
    ExcluirCursoController,
    FormLoginController,
    InserirCursoController,
    LoginController,
    LogoutController
};

return [
    "/inserir-curso" => InserirCursoController::class
];

