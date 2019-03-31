<?php

namespace Modelo\Controllers;

use \Modelo\Model\Task;

class TaskController
{
    //LISTA TODAS
    public function getAll()
    {
        $all = Task::all();
        return json_encode($all);

    }
    // CADASTRA A TASK
    public function create($request, $response)
    {
        $input = $request->getParsedBody();

        $task = new Task();
        $task->categorie_id = $input['categorie_id'];
        $task->title = $input['title'];
        $task->text = $input['text'];
        $task->save();

        return json_encode($task);
    }
    //ATUALIZA A TASK
    public function update($request, $response, $args)
    {
        $input = $request->getParsedBody();

        $task = Task::find($args['id']);
        $task->categorie_id = $input['categorie_id'];
        $task->title = $input['title'];
        $task->text = $input['text'];
        $task->save();

        return json_encode($task);
    }
    //EXCLUI A TASK
    public function delete($request, $response, $args)
    {
        $task = Task::destroy($args['id']);
        return json_encode($task);
    }
    //BUSCA A TASK
    public function show($request, $response, $args)
    {
        $show_task = Task::find($args['id']);
        return json_encode($show_task);
    }
    // CONTA O TOTAL DE TASK
    public function regCount()
    {
        $all = Task::all();
        return json_encode($all->count());
    }
    //BUSCA PELO O TITLE DA TASK
    public function searchTask($request, $response, $args)
    {
        $search_task = Task::where('title', 'like', "%" . $args['query'] . "%")->get();
        return json_encode($search_task);
    }
}
