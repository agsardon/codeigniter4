<?php

namespace App\Controllers\Admin;

use App\Models\PeliculaModel;
use App\Controllers\BaseController;

class Peliculas extends BaseController
{
    public function index()
    {
        $peliculaModel = new PeliculaModel();
        
        return view('admin/peliculas/index', [
            'peliculas' => $peliculaModel->findAll()
        ]);
    }

    public function new()
    {
        return view('admin/peliculas/new');
    }

    public function show($id)
    {
        $peliculaModel = new PeliculaModel();
        return view('admin/peliculas/show', [
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function create()
    {
        $data = $this->request->getPost();

        $peliculaModel = new PeliculaModel();
        $peliculaModel->insert($data);

        return redirect()->to('admin/peliculas');
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();
        return view('admin/peliculas/edit', [
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function update($id)
    {
        $peliculaModel = new PeliculaModel();

        $peliculaModel->update($id, [
            'titulo' => $this->request->getPost('titulo'),
            'descripcion' => $this->request->getPost('descripcion')
        ]);

        return redirect()->back();
    }

    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        return redirect()->back();
    }
}
