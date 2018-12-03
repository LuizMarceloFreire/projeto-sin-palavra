@extends('layouts.app')

@section('content')

   
    <div class="container">
        <div class="card">
                <div class="card-header">
                    Lista de Documentos
                    <a class="float-right" href="{{url('documentos/novo')}}">Novo Documento</a>
                </div>
               


<div class="card-body">
   
<br>

    <form>
        <table class="table table-hover" border="3"  bordercolor="#EEE">


                        <thead align="center">

                        <th>ID </th>
                       
                        <th> Tipo Doc</th>
                        <th> Descrição </th>
                        <th> Observações </th>
                        
                        <th> Ações</th>


                        </thead>


                        <tbody align="center"> 
                            <tr>
                                <td> 01 </td>

                           
                           
                                <td>exemplo </td>

                                <td>exemplo </td>

                                <td> exemplo </td>


                                <td>   
                                <button class="btn"> <a href="{{url('documentos/detalhe')}}"> V </a></button>

                                 
                                    <button class="btn btn-default"> E </button>
                                    <button class="btn btn-default"> D </button>

                                </td>
                            </tr>
                        </tbody>
  

        </table>
    </form>


</div>
</div>

</div>
                
           
   
@endsection