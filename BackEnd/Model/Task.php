<?php

namespace Modelo\Model;

use Modelo\Util\DBLayer;

class Task extends \Illuminate\Database\Eloquent\Model
{

    private $db = null;
    protected $schema = "tasks";

    public function __construct()
    {
        $this->db = DBLayer::Connect();
    }
    //LISTA TODAS AS TASKS
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
