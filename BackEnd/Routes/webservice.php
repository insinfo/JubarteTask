<?php

use \Slim\Http\Request;
use \Slim\Http\Response;

use \Modelo\Controllers\FichaController;

use PmroPadraoLib\Middleware\AuthMiddleware;
use PmroPadraoLib\Middleware\LogMiddleware2;

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



})->add(new AuthMiddleware())->add(new LogMiddleware2());
