<?php

namespace App\service;

use App\Models\Tarefa;

class TarefaService{
    public function create ($tarefa){
        $dados = Tarefa::create([
            'titulo' => $tarefa['titulo'],
            'descricao' => $tarefa['descricao'],
            'status' => 'em aberto',
        ]);
        return $dados;
    }

    public function findById ($id){
        $tarefa = Tarefa::find($id);
        if ($tarefa == null){
            return [
                'status' => false,
                'message' => 'Tarefa nao encontrada'
    ];
        }

        return [
            'status'=> true,
            'message' => 'Tarefa encontrada com sucesso',
            'data'=> $tarefa
        ];

    }
    public function getAll (){
        $tarefa = Tarefa::all();
        return [
            'status' =>true,
            'message' => 'tarefa encontrada',
            "data" => $tarefa
        ];
    }

}