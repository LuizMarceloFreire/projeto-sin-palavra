@extends('layouts.app')

@section('content')

   
    <div class="container">
        <div class="card">
                <div class="card-header">
                    Detalhes da Empresa

                </div>
               


<div class="card-body">
   
<br>

    <form>
        <table class="table table-hover" border="3"  bordercolor="#EEE">


                        <thead align="center">

                        <th>ID </th>
                        <th> Nome da Empresa </th>
                        <th> CNPJ</th>
                        <th> Descrição da Empresa </th>
                        
                        
                        


                        </thead>


                        <tbody align="center"> 
                            <tr>
                                <td> 01 </td>

                                <td>exemplo </td>
                           
                                <td>exemplo </td>

                                <td>exemplo </td>

                                


                            </tr>
                        </tbody>
  

        </table>
    </form>

<a  href="{{ url('empresas') }}">
                <button class="btn btn-primary">    
                 Voltar 
                </button>
                </a>
</div>
</div>

</div>
                
           
   
@endsection