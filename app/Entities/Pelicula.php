<?php

namespace App\Entities;

use CodeIgniter\Entity\Entity;

class Pelicula extends Entity
{
    public function getTitulo() {
        return esc($this->attributes['titulo']);
    }

    public function getDescripcion() {
        return esc($this->attributes['descripcion']);
    }
}