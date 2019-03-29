<?php

namespace Modelo\Controllers;
use \Modelo\Model\Categorie;
use \Modelo\Model\Task;
use \Slim\Http\Request;
use \Slim\Http\Response;

class TaskController
{
    
    public function getAll()
    {
        $categorie = new Task();
        $api= $categorie->findAll();
        $response = json_encode($api);
        return $response;
    }

    public function create(){
        $newTask = new Task();
        $newTask->title = $request;
    }

}
