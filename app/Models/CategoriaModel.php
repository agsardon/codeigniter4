<?php

namespace App\Models;

use CodeIgniter\Model;

class CategoriaModel extends Model
{
    protected $table = 'categorias';
    protected $allowedFields = ['titulo'];
    protected $returnType    = \App\Entities\Categoria::class;
}
