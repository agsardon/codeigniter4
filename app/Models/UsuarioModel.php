<?php

namespace App\Models;

use CodeIgniter\Model;

class UsuarioModel extends Model
{
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $returnType       = \App\Entities\Usuario::class;
    protected $allowedFields    = ['usuario', 'email', 'contrasenya'];

    public function verificaContrasenya($contrasenyaPlano, $contrasenyaHash)
    {
        return password_verify($contrasenyaPlano, $contrasenyaHash);
    }
}
