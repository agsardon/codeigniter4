<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Usuario extends Entity
{
    public function setContrasenya($contrasenya)
    {
        $this->contrasenya = password_hash($contrasenya, PASSWORD_DEFAULT);
    }
}