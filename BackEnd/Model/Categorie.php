<?php

namespace Modelo\Model;

use Modelo\Util\DBLayer;

class Categorie extends \Illuminate\Database\Eloquent\Model
{

    private $db = null;
    protected $schema = "categories";

    public function __construct()
    {
        $this->db = DBLayer::Connect();
    }
    //LISTA TODAS AS CATEGORIAS
    public function findAll()
    {
        $query = $this->db->table($this->schema)
            ->get();
        if ($query) {
            return $query;
        } else {
            echo "<b>Erro:</b> A query retornou vazia!";
        }
    }

}
