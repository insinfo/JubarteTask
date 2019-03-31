<?php

use \Modelo\Controllers\CategorieController;
use \Modelo\Controllers\FichaController;
use \Modelo\Controllers\TaskController;

use \Slim\Http\Request;
use \Slim\Http\Response;

// API CATEGORIAS

$app->group('/api', function () use ($app) {

    //LISTA TODAS AS CATEGORIAS
    $app->get('/categories', function () use ($app) {
        return CategorieController::getAll();
    });

});

// API TASKS
$app->group('/api', function () use ($app) {

    //LISTA TODAS AS TASKS
    $app->get('/tasks', function () use ($app) {
        return TaskController::getAll();
    });

    //VISUALIZA A TASK SELECIONADA
    $app->get('/task/show/[{id}]', function (Request $request, Response $response, $args) use ($app) {
        return TaskController::show($request, $response, $args);
    });

    //TOTAL DE TASKS
    $app->get('/task/count', function () use ($app) {
        return TaskController::regCount();
    });

    // BUSCA A TASK PELO TITULO
    $app->get('/tasks/search/[{query}]', function (Request $request, Response $response, $args) use ($app) {
        return TaskController::searchTask($request, $response, $args);
    });
    //ADICIONA A TASK
    $app->post('/tasks/new', function (Request $request, Response $response) use ($app) {
        return TaskController::create($request, $response);
    });
    //ATUALIZA  TASK
    $app->put('/tasks/update/[{id}]', function (Request $request, Response $response, $args) use ($app) {
        return TaskController::update($request, $response, $args);
    });
    //EXCLUI A TASK
    $app->delete('/tasks/delete/[{id}]', function (Request $request, Response $response, $args) use ($app) {
        return TaskController::delete($request, $response, $args);
    });

});

// ROTAS DE WEBSERVICE REST
$app->group('/api', function () use ($app) {

    //CRIA E ATUALIZA
    $app->put('/fichas/[{id}]', function (Request $request, Response $response, $args) use ($app) {
        return FichaController::addItem($request, $response);
    });

    //CHECA SE É CONCURSADO OU NÃO
    $app->get('/servidor/concursado/check/[{cpf}]', function (Request $request, Response $response, $args) use ($app) {
        return FichaController::isConcursado($request, $response);
    });

});

$app->group('/api', function () use ($app) {

    //OBTEM
    $app->get('/fichas/[{id}]', function (Request $request, Response $response, $args) use ($app) {
        return FichaController::getItem($request, $response);
    });

    //LISTA
    $app->post('/fichas', function (Request $request, Response $response, $args) use ($app) {
        return FichaController::getAll($request, $response);
    });
    //DELETA ITEMS
    $app->delete('/fichas', function (Request $request, Response $response, $args) use ($app) {
        return FichaController::deleteItems($request, $response);
    });

});
