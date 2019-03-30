<?php

namespace Modelo\Controllers;

use \Modelo\Model\Task;
use \Slim\Http\Response;

class TaskController
{

    public function getAll()
    {
        $all = Task::all();
        return json_encode($all);
    }

    public function create()
    {
        $newTask = new Task();
        $newTask->title = $request;
    }

    public function delete($request, $respsonse, $args)
    {
        $task = Task::destroy($args['id']);
       
        return json_encode($task);
    }

}
