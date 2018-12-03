@extends('layouts.app')

@section('content')

   
    <div class="container">
        <div class="card">
                <div class="card-header">
                    Detalhes do Documento

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
                        <th> Download </th>
                        
                        


                        </thead>


                        <tbody align="center"> 
                            <tr>
                                <td> 01 </td>

                            
                           
                                <td>exemplo </td>

                                <td>exemplo </td>

                                <td> exemplo </td>

                                <td width="1"> <button class="btn"> D </button> </td>


                            </tr>
                        </tbody>
  

        </table>
    </form>

<a  href="{{url('documentos') }}">
                <button class="btn btn-primary">    
                 Voltar 
                </button>
                </a>
</div>
</div>

</div>
                
           
   
@endsection