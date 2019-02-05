<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 02/01/2019
 * Time: 17:37
 */

namespace MinhaCasa\Controllers;

use MinhaCasa\Model\Ficha;
use MinhaCasa\Model\Filtro;
use MinhaCasa\Model\Filtros;
use \Slim\Http\Request;
use \Slim\Http\Response;
use \PmroPadraoLib\Util\StatusCode;
use \PmroPadraoLib\Util\StatusMessage;
use MinhaCasa\Services\FichaService;
use MinhaCasa\Services\ServidorConcursadoService;
use \Exception;
use MinhaCasa\Util\Utils;

class FichaController
{
    public static function getAll(Request $request, Response $response)
    {
        try {

            $params = $request->getParsedBody();
            $draw = isset($params['draw']) ? $params['length'] : null;
            $limit = isset($params['length']) ? $params['length'] : null;
            $offset = isset($params['start']) ? $params['start'] : null;
            $search = isset($params['search']) ? $params['search'] : null;

            $rendaFamiliar = isset($params['rendaFamiliar']) ? $params['rendaFamiliar'] : null;
            $tempoServicoServidor = isset($params['tempoServicoServidor']) ? $params['tempoServicoServidor'] : null;

            $ordering = isset($params['ordering']) ? $params['ordering'] : null;
            $orderBy = null;
            $orderDir = 'asc';

            if ($ordering != null) {
                $orderBy = $ordering[0]['columnKey'];
                $orderDir = $ordering[0]['direction'];
            }

            $filters = new Filtros();
            if ($rendaFamiliar != null) {
                foreach ($rendaFamiliar as $value) {
                    $filters->add(new Filtro('rendaFamiliar', '=', $value));
                }
            }

            if ($tempoServicoServidor != null) {
                foreach ($tempoServicoServidor as $value) {
                    $filters->add(new Filtro('tempoServicoServidor', '=', $value));
                }
            }


            if(Utils::isSetOrNull($params,'moraOcupacaoIrregular') ){
                $filters->add(new Filtro('moraOcupacaoIrregular', '=', $params['moraOcupacaoIrregular']));
            }
            if(Utils::isSetOrNull($params,'possuiImovelProprio') ){
                $filters->add(new Filtro('possuiImovelProprio', '=', $params['possuiImovelProprio']));
            }
            if(Utils::isSetOrNull($params,'resideAreaRisco') ){
                $filters->add(new Filtro('resideAreaRisco', '=', $params['resideAreaRisco']));
            }
            if(Utils::isSetOrNull($params,'possuiDeficiencia') ){
                $filters->add(new Filtro('possuiDeficiencia', '=', $params['possuiDeficiencia']));
            }
            if(Utils::isSetOrNull($params,'possuiDoencaFamilia') ){
                $filters->add(new Filtro('possuiDoencaFamilia', '=', $params['possuiDoencaFamilia']));
            }
            if(Utils::isSetOrNull($params,'possuiMaisMatriculas') ){
                $filters->add(new Filtro('possuiMaisMatriculas', '=', $params['possuiMaisMatriculas']));
            }


            $service = new FichaService();
            $data = $service->getAllByFilters($search, $filters, $limit, $offset, $orderBy, $orderDir, $totalRecords);

            $result['draw'] = $draw;
            $result['recordsFiltered'] = $totalRecords;
            $result['recordsTotal'] = $totalRecords;
            $result['data'] = $data;

            return $response->withStatus(StatusCode::SUCCESS)->withJson($result);

        } catch (Exception $e) {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson((['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]));
        }

    }

    public static function addItem(Request $request, Response $response)
    {
        try {
            //$id = $request->getAttribute('id');
            $data = $request->getParsedBody();

            $service = new ServidorConcursadoService();
            $isConcursado= $service->isConcursado($data['cpf']);
            if(!$isConcursado){
                throw new Exception("Este pré-cadastro esta disponível somente para servidores estatutários.");
            }

            $service = new FichaService();
            $isExists = $service->isExists($data['cpf']);
            if($isExists){
                throw new Exception("Este servidor já esta cadastrado.");
            }

            $ficha = new Ficha();
            $ficha->fillFromArray($data);
            $ficha_id = $service->addItem($ficha);

            return $response->withStatus(StatusCode::SUCCESS)
                ->withJson([
                    'message' => 'Cadastro realizada com sucesso!',
                    'nome' => $data['nome'],
                    'numero' =>  $ficha_id
                ]);

        } catch (Exception $e) {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson((['message' =>  $e->getMessage(),
                    'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]));
        }
    }

    public static function isConcursado(Request $request, Response $response)
    {
        try {
            $cpf = $request->getAttribute('cpf');
            $service = new ServidorConcursadoService();
            $isConcursado= $service->isConcursado($cpf);

            return $response->withStatus(StatusCode::SUCCESS)
                ->withJson(['isConcursado' => $isConcursado]);

        } catch (Exception $e) {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson((['message' => StatusMessage::MENSAGEM_ERRO_PADRAO,
                    'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]));
        }
    }

    public static function getItem(Request $request, Response $response)
    {
        try {
            $id = $request->getAttribute('id');
            $service = new FichaService();
            return $response
                ->withStatus(StatusCode::SUCCESS)
                ->withJson($service->getItem($id));

        } catch (Exception $e) {

            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson(['message' => StatusMessage::MENSAGEM_ERRO_PADRAO, 'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]);
        }
    }

    public static function deleteItems(Request $request, Response $response)
    {
        try {
            $formData = $request->getParsedBody();
            $ids = $formData['ids'];
            $idsCount = count($ids);

            $service = new FichaService();
            $itensDeletadosCount = $service->deleteItems($ids);

            if ($itensDeletadosCount == $idsCount) {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson(['message' => StatusMessage::TODOS_ITENS_DELETADOS]);
            } else if ($itensDeletadosCount > 0) {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson(['message' => StatusMessage::NEM_TODOS_ITENS_DELETADOS]);
            } else {
                return $response->withStatus(StatusCode::SUCCESS)
                    ->withJson((['message' => StatusMessage::NENHUM_ITEM_DELETADO]));
            }
        } catch (Exception $e) {
            return $response->withStatus(StatusCode::BAD_REQUEST)
                ->withJson(['message' => StatusMessage::MENSAGEM_ERRO_PADRAO,
                    'exception' => $e->getMessage(), 'line' => $e->getLine(), 'file' => $e->getFile()]);
        }
    }

}