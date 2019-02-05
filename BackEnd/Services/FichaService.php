<?php
/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 02/01/2019
 * Time: 16:20
 */

namespace MinhaCasa\Services;

use MinhaCasa\Util\DBLayer;
use MinhaCasa\Model\Ficha;
use MinhaCasa\Model\Filtros;
use \Exception;

class FichaService implements IFichaDataStore
{
    private $db = null;

    function __construct()
    {
        $this->db = DBLayer::Connect();
    }

    public function addItem(Ficha $ficha)
    {
        $id = $ficha->getId();
        if ($id != null) {
            $this->db->table(Ficha::TABLE_NAME)
                ->where(Ficha::KEY_ID, DBLayer::OPERATOR_EQUAL, $id)
                ->update($ficha->toArray());

        } else {
            $id = $this->db->table(Ficha::TABLE_NAME)
                ->insertGetId($ficha->toArray());

        }
        return $id;
    }

    public function isExists($cpf)
    {
        $result = $this->db->table(Ficha::TABLE_NAME)
            ->where(Ficha::CPF, DBLayer::OPERATOR_EQUAL, $cpf)
            ->get();

        if ($result != null) {
            return true;
        } else {
            return false;
        }
    }

    public function updateItem(Ficha $ficha)
    {
        $this->db->table(Ficha::TABLE_NAME)
            ->where(Ficha::KEY_ID, DBLayer::OPERATOR_EQUAL, $ficha->getId())
            ->update($ficha->toArray());
    }

    public function deleteItem($id)
    {
        $this->db->table(Ficha::TABLE_NAME)
            ->where(Ficha::KEY_ID, DBLayer::OPERATOR_EQUAL, $id)
            ->delete();
    }

    public function deleteItems(array $ids)
    {
        $itensDeletadosCount = 0;

        foreach ($ids as $id) {

            $result = $this->db->table(Ficha::TABLE_NAME)
                ->where(Ficha::KEY_ID, DBLayer::OPERATOR_EQUAL, $id)->first();

            if ($result) {
                $itensDeletadosCount++;
            }
        }
        return $itensDeletadosCount;
    }

    public function getItem($id)
    {
        return $this->db->table(Ficha::TABLE_NAME)
            ->where(Ficha::KEY_ID, DBLayer::OPERATOR_EQUAL, $id)
            ->get();
    }

    public function getAll($search = null, $limit = 10, $offset = 0, $orderBy = null, $orderDir = 'asc', &$totalRecords)
    {
        $query = $this->db->table(Ficha::TABLE_NAME);

        if ($search != null) {
            $query->where(function ($query) use ($search) {
                $search = '%' . $search . '%';
                $query->orWhere(Ficha::CPF, DBLayer::OPERATOR_ILIKE, $search);
                $query->orWhere(Ficha::NOME, DBLayer::OPERATOR_ILIKE, $search);
                $query->orWhere(Ficha::LOTACAO, DBLayer::OPERATOR_ILIKE, $search);
            });
        }

        $totalRecords = $query->count();

        if ($orderBy != null) {
            $query->orderBy($orderBy, $orderDir);
        }

        if ($limit != null && $offset != null) {
            $data = $query->limit($limit)->offset($offset)->get();
        } else {
            $data = $query->get();
        }

        return $data;
    }

    public function findByField($field, $value, $limit = 10, $offset = 0, $orderBy = null, $orderDir = 'asc', &$totalRecords)
    {
        $query = $this->db->table(Ficha::TABLE_NAME);
        $query->where($field, '=', $value);
        $totalRecords = $query->count();

        if ($orderBy != null) {
            $query->orderBy($orderBy, $orderDir);
        }

        if ($limit != null && $offset != null) {
            $data = $query->limit($limit)->offset($offset)->get();
        } else {
            $data = $query->get();
        }

        return $data;
    }

    public function getAllByFilters($search, Filtros $filters, $limit = 10, $offset = 0, $orderBy = null, $orderDir = 'asc', &$totalRecords)
    {
        $query = $this->db->table(Ficha::TABLE_NAME);

        if ($search != null) {
            $query->where(function ($query) use ($search) {
                $search = '%' . $search . '%';
                $query->orWhere(Ficha::CPF, DBLayer::OPERATOR_ILIKE, $search);
                $query->orWhere(Ficha::NOME, DBLayer::OPERATOR_ILIKE, $search);
                $query->orWhere(Ficha::LOTACAO, DBLayer::OPERATOR_ILIKE, $search);
            });
        }

        if ($filters != null) {
            foreach ($filters->filtros as $filtro) {
                $query->orWhere($filtro->field, $filtro->operator, $filtro->value);
            }
        }


        $totalRecords = $query->count();

        if ($orderBy != null) {
            $query->orderBy($orderBy, $orderDir);
        }

        if ($limit != null && $offset != null) {
            $data = $query->limit($limit)->offset($offset)->get();
        } else {
            $data = $query->get();
        }

        return $data;
    }

}