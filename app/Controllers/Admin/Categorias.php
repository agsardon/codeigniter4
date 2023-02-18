<?php

namespace App\Controllers\Admin;

use App\Models\CategoriaModel;
use App\Controllers\BaseController;

class Categorias extends BaseController
{
    public function index()
    {
        $categoriaModel = new CategoriaModel();
        
        return view('admin/categorias/index', [
            'categorias' => $categoriaModel->findAll()
        ]);
    }

    public function new()
    {
        return view('admin/categorias/new');
    }

    public function show($id)
    {
        $categoriaModel = new CategoriaModel();
        return view('admin/categorias/show', [
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function create()
    {
        if(!$this->validate('categorias')) {
            session()->setFlashdata([
                'errors' => $this->validator->listErrors()
            ]);

            return redirect()->back()->withInput();
        }

        $data = $this->request->getPost();

        $categoriaModel = new CategoriaModel();
        $categoriaModel->insert($data);

        return redirect()->to('admin/categorias')->with('mensaje', 'Categoría creada con éxito');
    }

    public function edit($id)
    {
        $categoriaModel = new CategoriaModel();
        return view('admin/categorias/edit', [
            'categoria' => $categoriaModel->find($id)
        ]);
    }

    public function update($id)
    {
        if(!$this->validate('categorias')) {
            session()->setFlashdata([
                'errors' => $this->validator->listErrors()
            ]);

            return redirect()->back()->withInput();
        }

        $categoriaModel = new CategoriaModel();

        $categoriaModel->update($id, [
            'titulo' => $this->request->getPost('titulo')
        ]);

        return redirect()->back()->with('mensaje', 'Categoría modificada con éxito');
    }

    public function delete($id)
    {
        $categoriaModel = new CategoriaModel();
        $categoriaModel->delete($id);

        session()->setFlashdata('mensaje', 'Categoría eliminada con éxito');

        return redirect()->back();
    }
}
