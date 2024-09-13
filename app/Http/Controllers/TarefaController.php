<?php

namespace App\Http\Controllers;

use App\service\TarefaService;
use Illuminate\Http\Request;

class TarefaController extends Controller
{
    protected $tarefaService;

    public function __construct(TarefaService $tarefaService)
    {
        $this->tarefaService = $tarefaService;
    }

    public function store (Request $request){
        $tarefa = $this->tarefaService->create($request->all());
        return response()->json($tarefa);
    }

    public function findById ($id){
$tarefa = $this->tarefaService->findById($id);
return response()->json($tarefa);
    }

    public function index (){
        $tarefa = $this->tarefaService->getAll();
        return response()->json($tarefa);
    }
}

