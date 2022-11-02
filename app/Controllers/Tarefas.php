<?php

namespace App\Controllers;

use App\Controllers\BaseController;

use App\Models\TarefasModel;

class Tarefas extends BaseController
{
    public function index()
    { 
        return self::lista();
    }

    public function lista()
    {
        $tarefasModel = new TarefasModel();

        $query = $tarefasModel->findAll();

        $tabela ='
        <table class="table" id="results">
            <tbody id="body">  
        '; 

        $linhas = '';

        foreach ($query as $row) {
            
            switch($row['status']){
                case 1:
                    $status = '
                    <form method="post">
                        <input type="hidden" name="tipo" value="status">
                        <input type="hidden" name="cod" value="'.$row['cod'].'">
                        <input type="hidden" name="status" value="2">
                        <button type="submit" class="pendente btn-lista">
                            <i class="fal fa-check-circle icone-info"></i>
                        </button>
                    </form>
                    ';
                    break;
                case 2:
                    $status = '
                    <form method="post">
                        <input type="hidden" name="tipo" value="status">
                        <input type="hidden" name="cod" value="'.$row['cod'].'">
                        <input type="hidden" name="status" value="1">
                        <button type="submit" class="concluido btn-lista">
                            <i class="fas fa-check-circle icone-info"></i>
                        </button>
                    </form>
                    ';
                    break;
            }
            
            $linhas .= '

            <tr>
                <td class="titulo-table">'.mb_strimwidth($row['titulo'], 0, 50, "...").'</td>
                <td class="info-table">
                    '.$status.'
                    <a href="lista/editar/'.$row['cod'].'" title="Editar | Clique para Editar">
                        <i class="fas fa-edit icone-info"></i>
                    </a>
                    <form method="post">
                        <input type="hidden" name="tipo" value="excluir">
                        <input type="hidden" name="cod" value="'.$row['cod'].'">
                        <button type="submit" class="btn-lista">
                        <i class="fas fa-trash icone-info"></i>
                        </button>
                    </form>
                </td>
            </tr>

            ';
        }

        $tabela .= $linhas;
                
        $tabela .='
            </tbody>
        </table>
        ';

        echo $tabela;
    }


}