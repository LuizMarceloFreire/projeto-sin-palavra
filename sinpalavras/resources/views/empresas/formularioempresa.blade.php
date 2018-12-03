@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Informe a Empresa
                    <a class="float-right" href="{{url('empresas')}}">Listagem das Empresas</a>
                </div>
                <div class="card-body">

                  @if(Session::has('mensagem_sucesso'))
                  <div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}}
                   </div>
                   @endif

                  {!! Form::open(['url'=>'empresas/salvar', 'files'=>'true', 'method'=>'post']) !!}

                	{{ Form::label('nomeempresa', 'Nome do Empresa') }}
                  {{ Form::input('text', 'nomeempresa', null, ['class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Nome da Empresa']) }}
                  <br>

                  {{ Form::label('cnpj', 'CNPJ') }}
                  {{ Form::input('text', 'cnpj', null, ['class' => 'form-control', 'required', 'autofocus', 'placeholder' => '00.000.000/0000-00']) }}
                  <br>

                  {{ Form::label('descricaoempresa', 'Descrição da Empresa') }}
                  {{ Form::input('descricaoempresa', 'descricaoempresa', null, ['class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Descrição da Empresa']) }}
                  <br>
                 
                   {!! Form::submit('Cadastrar', ['class'=>'btn btn-primary']) !!}

                   
                       {!! Form::close() !!}

                       
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection