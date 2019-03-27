<?php

$BASE_DIR = dirname(__FILE__);

$ini_array = parse_ini_file($BASE_DIR.'/../.env');
define('VIEWS_DIR_MODELO',$ini_array['VIEWS_DIR']);
define('DB_HOST_MODELO',$ini_array['DB_HOST']);
define('DB_NAME',$ini_array['DB_NAME']);
define('DB_USERNAME',$ini_array['DB_USERNAME']);
define('DB_PASSWORD',$ini_array['DB_PASSWORD']);
define('PROXY_MODELO',$ini_array['PROXY']);
define('STORAGE_PATH_MODELO',$ini_array['STORAGE_PATH']);
define('WEB_ROOT_PATH_MODELO',$ini_array['WEB_ROOT_PATH']);


$VIEWS_DIR = $BASE_DIR.'/View';

//require_once '../../pmroPadrao/src/start.php';
require_once $BASE_DIR.'/../BackEnd/vendor/autoload.php';

use Slim\Handlers\NotFound;
use Slim\Views\Twig;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ResponseInterface;

$app = new \Slim\App([
    'settings' => [
        // Only set this if you need access to route within middleware
        'determineRouteBeforeAppMiddleware' => true,
        'displayErrorDetails' => true
    ]
]);

$container = $app->getContainer();
$container['view'] = function ($container) use ($VIEWS_DIR){
    $view = new \Slim\Views\Twig($VIEWS_DIR, [
        'cache' => false
    ]);
    // Instantiate and add Slim specific extension
    $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
    $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));
    return $view;
};

//manipulador de pagina de erro 404
class NotFoundHandler extends NotFound {
    private $view;
    private $templateFile;
    public function __construct(Twig $view, $templateFile) {
        $this->view = $view;
        $this->templateFile = $templateFile;
    }
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response) {
        parent::__invoke($request, $response);
        $this->view->render($response, $this->templateFile);
        return $response->withStatus(404);
    }
}

$container['notFoundHandler'] = function ($c) {
    return new NotFoundHandler($c->get('view'), '404.php');
};

// ROTAS DE WEBPAGES
require_once $BASE_DIR.'/../BackEnd/Routes/web.php';

require_once $BASE_DIR.'/../BackEnd/Routes/webservice.php';

$app->run();