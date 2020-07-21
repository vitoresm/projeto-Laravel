@extends('layouts.app2')

@section('conteudo')

<div class="container">
    
   <div class="card" >
           
        <div class="card-header h4">Editar Pedido do Cliente</div>

        <div class="card-body">
                <table  class="table table-striped table-bordered table-sm">
                    <thead>
                        <tr>

                            <th>ID </th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor</th>
                            <th>Ação</th>

                        </tr>
                    <thead>
                    <tbody>

                        @foreach ($pedidoProdutos as $item)
                        
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->buscarProduto->nome}}</td>
                            <td>{{$item->quantidade}}</td>
                            <td>{{$item->valor_produtos}}</td>              
                            <td>
                                <form action="{{route('admin.pedidoprodutodelete',['id'=> $item->id, 'id_cliente' => $item->buscarPedidos->buscarCliente->id, 'id_pedido' => $item->id_pedido ])}}" method="POST">
                                @csrf

                                <input type="submit" onclick='return pergunta();' value=Apagar   class="btn btn-sm btn-danger" >

                                </form>
                            </td>

                        </tr>
                    
                        @endforeach

                    </tbody>

                </table>
            
        </div>            
        
        </div>
         
</div>
@endsection