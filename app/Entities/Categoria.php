<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Categoria extends Entity
{
    public function getTitulo() {
        return esc($this->attributes['titulo']);
    }
}