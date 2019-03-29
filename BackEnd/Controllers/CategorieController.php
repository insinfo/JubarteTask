<?php

namespace Modelo\Controllers;
use \Modelo\Model\Categorie;
use \Slim\Http\Request;
use \Slim\Http\Response;

class CategorieController
{
    
    public function getAll()
    {
        $categorie = new Categorie();
        $api= $categorie->findAll();
        $response = json_encode($api);
        return $response;
    }

}
