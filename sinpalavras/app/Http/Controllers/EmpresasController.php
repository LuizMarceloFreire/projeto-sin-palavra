<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    public function index()
    {
    	return view('empresas.listaempresa');
    }

    public function novo()
    {
    	return view('empresas.formularioempresa');
    }

     public function salvar(Request $request)
    {
    	$empresa = new Empresa();

    	$empresa = $empresa->create($request->all());

    	\Session::flash('mensagem_sucesso', 'Empresa cadastrada com sucesso!');

    	return Redirect('empresas.novo');
    }
}
