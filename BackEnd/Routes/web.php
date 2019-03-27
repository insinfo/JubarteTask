<?php

use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use Modelo\Model\Constants;


$app->get('/', function (Request $request, Response $response, $args) use ($app) {

    //return $this->view->render($response, 'FichaCadastroView.php');
    return $this->view->render($response, 'Version.php');
    /*if(date("d") > 20 ) {
        return $this->view->render($response, 'FichaCadastroView.php');
    }*/
    //return $this->view->render($response, 'aviso.php',['date'=> date("Y-m-d H:i:s")]);
});

$app->get('/comprovante', function (Request $request, Response $response, $args) use ($app) {

    return $this->view->render($response, 'ComprovanteDeInscricao.php', [
        'nome' => $request->getQueryParams()['nome'],
        'numero' => str_pad($request->getQueryParams()['numero'], 5, '0', STR_PAD_LEFT)
    ]);

});

$app->group('', function () use ($app) {

    $app->get('/gerencia', function (Request $request, Response $response, $args) use ($app) {
        return $this->view->render($response, 'GerenciaFichaView.php');
    });

});
