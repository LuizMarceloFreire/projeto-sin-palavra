@extends('layouts.app')

@section('content')

   
    <div class="container">
        <div class="card">
                <div class="card-header">
                    Lista de Empresa
                    <a class="float-right" href="{{url('empresas/novo')}}">Nova Empresa</a>
                </div>
               


<div class="card-body">
   
<br>

    <form>
        <table class="table table-hover" border="3"  bordercolor="#EEE">


                        <thead align="center">

                        <th>ID </th>
                        <th> Nome Empresa </th>
                        <th> CNPJ</th>
                        <th> Descrição da Empresa </th>
                        <th> Ações</th>


                        </thead>


                        <tbody align="center"> 
                            <tr>
                                <td> 01 </td>

                                <td>exemplo </td>
                           
                                <td>exemplo </td>

                                <td>exemplo </td>


                                <td>   
                            <button class="btn"> <a href="{{url('empresas/detalheemp') }}"> V </a> </button>

                                 
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