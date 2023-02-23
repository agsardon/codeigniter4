<?php

namespace App\Controllers\Web;

use App\Controllers\BaseController;
use App\Models\UsuarioModel;

class Usuario extends BaseController
{
    public function index()
    {
        //
    }

    public function registro()
    {
        return view('web/usuario/registro');
    }

    public function create()
    {
        if(!$this->validate('registro')){
            session()->setFlashdata([
                'errors' => $this->validator->listErrors()
            ]);

            return redirect()->back()->withInput();
        }
        
        $usuarioModel = new UsuarioModel();
        $usuario = new \App\Entities\Usuario();
        $usuario->usuario = $this->request->getPost('usuario', FILTER_SANITIZE_SPECIAL_CHARS);
        $usuario->email = $this->request->getPost('email', FILTER_SANITIZE_EMAIL);
        $usuario->setContrasenya( $this->request->getPost('contrasenya', FILTER_SANITIZE_SPECIAL_CHARS));
        $usuarioModel->save($usuario);

        return redirect()->to(route_to('usuario.login'))->with('mensaje', 'Usuario creado con éxito');
    }

    public function login()
    {
        return view('web/usuario/login');
    }

    public function loginPost()
    {
        $usuarioModel = new UsuarioModel();

        $usuarioInput = $this->request->getPost('usuario', FILTER_SANITIZE_EMAIL);
        $contrasenyaInput = $this->request->getPost('contrasenya', FILTER_SANITIZE_SPECIAL_CHARS);

        $usuario = $usuarioModel
            ->select('id, usuario, email, contrasenya, tipo')
            ->where('usuario', $usuarioInput)
            ->orwhere('email', $usuarioInput)
            ->first();

        // echo $usuarioModel->getLastQuery();
        
        if(!$usuario)
        {
            return redirect()->back()->with('errors', 'usuario y/o contraseña incorrectos');
        }

        if(!$usuarioModel->verificaContrasenya($contrasenyaInput, $usuario->contrasenya)){
            return redirect()->back()->with('errors', 'usuario y/o contraseña incorrectos');
        }
        
        unset($usuario->contrasenya); //Por motivos de seguridad no guardamos la contraseña en la sesión. Una vez logueado el usuario no la necesitaremos más.
        session()->set('usuario', $usuario);
        return redirect()->to('/admin/categorias')->with('mensaje', "Bienvenido@ $usuario->usuario");
    }

    public function logout()
    {
        session()->destroy();
        return redirect()->to(route_to('usuario.login'));
    }
}
