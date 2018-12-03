@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Informe o Documento
                  <a class="float-right" href="{{url('documentos')}}">Listagem de Documentos</a>
                </div>
                <div class="card-body">

                  @if(Session::has('mensagem_sucesso'))
                  <div class="alert alert-success"> {{ Session::get('mensagem_sucesso')}}
                   </div>
                   @endif

                  {!! Form::open(['url'=>'documentos/salvar', 'files'=>'true', 'method'=>'post']) !!}


                	{{ Form::label('tipodoc', 'Tipo do Documento *') }}
                 	{{ Form::input('text', 'tipodoc', null, ['class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Tipo do Documento']) }}
                  <br>
                {{ Form::label('descricaodoc', 'Descrição do Documento *') }}
                  {{ Form::input('descricaodoc', 'descricaodoc', null, ['class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Descrição do Documento']) }}
                  <br>

                   {{ Form::label('palavrachave', 'Palavra-chave *') }}
                  {{ Form::input('palavrachave', 'palavrachave', null, ['class' => 'form-control', 'required', 'autofocus', 'placeholder' => 'Palavra-chave']) }}
                  <br>

                  {{ Form::label('obsdocument', 'Obrservações do Documento') }}
                  {{ Form::input('obsdocument', 'obsdocument', null, ['class' => 'form-control', '', 'autofocus', 'placeholder' => 'Observações']) }}
                  <br>

              
                  <br>

                   {!! Form::submit('Salvar', ['class'=>'btn btn-primary']) !!}


                       {!! Form::close() !!}

                       
                </div>

                
            </div>
        </div>
    </div>
</div>
@endsection