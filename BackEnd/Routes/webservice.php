<?php

use \Modelo\Controllers\CategorieController;
use \Modelo\Controllers\TaskController;
use \Modelo\Controllers\FichaController;

use \Slim\Http\Request;
use \Slim\Http\Response;

// CATEGORIAS

$app->group('/api', function () use ($app) {

    //LISTA TODAS AS CATEGORIAS
    $app->get('/categorias', function () use ($app) {
        return CategorieController::getAll();
    });

});

// TASKS

$app->group('/api', function () use ($app) {

    //LISTA TODAS AS tasks
    $app->get('/tasks', function () use ($app) {
        return TaskController::getAll();
    });

    $app->post('/tasks/new', function () use ($app) {
        return TaskController::create();
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
