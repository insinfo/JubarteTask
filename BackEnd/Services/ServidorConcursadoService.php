<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 02/01/2019
 * Time: 16:20
 */

namespace MinhaCasa\Services;

use MinhaCasa\Util\DBLayer;
use MinhaCasa\Model\ServidorConcursado;
use MinhaCasa\Model\Filtros;
use \Exception;
use function PHPSTORM_META\elementType;

class ServidorConcursadoService
{
    private $db = null;

    function __construct()
    {
        $this->db = DBLayer::Connect();
    }

    public function getByCpf($cpf)
    {
        return $this->db->table(ServidorConcursado::TABLE_NAME)
            ->where(ServidorConcursado::CPF, DBLayer::OPERATOR_EQUAL, $cpf)
            ->get();
    }

    public function isConcursado($cpf)
    {
        $result = $this->db->table(ServidorConcursado::TABLE_NAME)
            ->where(ServidorConcursado::CPF, DBLayer::OPERATOR_EQUAL, $cpf)
            ->get();

        if ($result != null) {
            return true;
        } else {
            return false;
        }
    }

}