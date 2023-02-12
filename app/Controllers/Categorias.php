<?php

namespace App\Controllers;

use App\Models\CategoriaModel;

class Categorias extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        
        return view('categorias/index', [
            'categorias' => $categoriaModel->findAll()
        ]);
    }

    public function new()
    {
        return view('categorias/new');
    }

    public function show($id)
    {
        $categoriaModel = new CategoriaModel();
        return view('categorias/show', [
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function create()
    {
        $data = $this->request->getPost();

        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert($data);

        echo 'creado';
    }

    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
        return view('categorias/edit', [
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function update($id)
    {
        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id, [
            'titulo' => $this->request->getPost('titulo')
        ]);

        echo 'Actualizado';
    }

    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        echo 'eliminado';
    }


}
