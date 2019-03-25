<?php

/**
 * Created by PhpStorm.
 * User: isaque
 * Date: 02/01/2019
 * Time: 16:22
 */

namespace Modelo\Services;
use Modelo\Model\Ficha;
use Modelo\Model\Filtros;

interface IFichaDataStore
{
    public function addItem(Ficha $ficha);
    public function updateItem(Ficha $ficha);
    public function deleteItem($id);
    public function deleteItems(array $ids);
    public function getItem($id);
    public function getAll($search=null,$limit=10,$offset=0,$orderBy=null,$orderDir='asc',&$totalRecords);
    public function findByField($field,$value,$limit=10,$offset=0,$orderBy=null,$orderDir='asc',&$totalRecords);
    public function getAllByFilters($search,Filtros $filters,$limit=10,$offset=0,$orderBy=null,$orderDir='asc',&$totalRecords);
}