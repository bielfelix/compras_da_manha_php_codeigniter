<?php

namespace App\Models;

use CodeIgniter\Model;

class TarefasModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'tarefas';
    protected $primaryKey       = 'cod';
    protected $useAutoIncrement = true;
    protected $returnType       = 'array';
    protected $allowedFields    = ['titulo', 'status'];

}
