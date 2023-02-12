<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class Peliculas extends BaseController
{
    public function index()
    {
        $peliculaModel = new PeliculaModel();
        
        return view('peliculas/index', [
            'peliculas' => $peliculaModel->findAll()
        ]);
    }

    public function new()
    {
        return view('peliculas/new');
    }

    public function show($id)
    {
        $peliculaModel = new PeliculaModel();
        return view('peliculas/show', [
            'pelicula' => $peliculaModel->find($id)
        ]);
    }

    public function create()
    {
        $data = $this->request->getPost();

        $peliculaModel = new PeliculaModel();
        $peliculaModel->insert($data);

        echo 'creado';
    }

    public function edit($id)
    {
        $peliculaModel = new PeliculaModel();
        return view('peliculas/edit', [
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

        echo 'Actualizado';
    }

    public function delete($id)
    {
        $peliculaModel = new PeliculaModel();
        $peliculaModel->delete($id);

        echo 'eliminado';
    }


}
