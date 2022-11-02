<?php

namespace App\Controllers;

use App\Models\TarefasModel;

class Lista extends BaseController
{
    public function index()
    {
        return self::board();
    }

    public function board(){

        if($this->request->getMethod() === 'post'){

            $tarefasModel = new TarefasModel();

            switch($this->request->getPost('tipo')){
                case 'cadastrar':
                    $tarefasModel->set('titulo', $this->request->getPost('titulo'));
                    if($tarefasModel->insert()){
                        return view('board');
                    }
                    break;
                
                case 'status':
                    $tarefa = $tarefasModel->find($this->request->getPost('cod'));
                    $tarefa['status'] = $this->request->getPost('status');
                    if($tarefasModel->update($this->request->getPost('cod'), $tarefa)){
                        return view('board');
                    }
                    break;
            
                case 'excluir':
                    if($tarefasModel->delete($this->request->getPost('cod'))){
                        return view('board');
                    }
                    break;
            }
            

        }
        
        return view('board');
    }

    public function editar($cod){

        $tarefasModel = new TarefasModel();
        $tarefa = $tarefasModel->find($cod);

        if($this->request->getMethod() === 'post'){
            $tarefa['titulo'] = $this->request->getPost('titulo');
            if($tarefasModel->update($cod, $tarefa)){
                return view('board');
            }
        }

        $data['tarefa'] = $tarefa;
        return view('editar', $data);
    }


}