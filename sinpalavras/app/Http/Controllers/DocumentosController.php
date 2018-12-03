<?php

namespace App\Http\Controllers;

use App\Doctipo;
use Illuminate\Http\Request;

class DocumentosController extends Controller
{
    public function index()
    {	
    	return view('documentos.lista');
    }

    public function novo()
    {
    	return view('documentos.formulario');
    }

     public function salvar(Request $request)
    {
    	$documento = new Doctipo();

    	$documento = $documento->create($request->all());

    	\Session::flash('mensagem_sucesso', 'Documento cadastrado com sucesso!');

    	return Redirect('documentos.novo');
    }

    public function detalhe()
        {
              return view('documentos.detalhe');

        
       
        }
}
