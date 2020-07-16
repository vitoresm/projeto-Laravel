@extends('layouts.app2')

@section('conteudo')

<div class="titulotabela">
   
</div>

<div class="container">

   <div class="card">

        <div class="card-header h5">Tabela Pedidos</div>
        
        <div class="card-body">
            <table id="datatable" class="display table table-striped table-bordered " width="100%">
                <thead>
                    <tr>
                       
                        <th>ID</th>
                        <th>Nome do cliente</th>
                        <th>Produtos do pedido</th>
                        <th>Valor total</th>
                        <th>Ação</th>
                       
                    </tr>
                </thead>
        
                <tbody>
        
                    @foreach ($pedidos as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->buscarCliente->nome}}</td>
                            <td>{{count($item->buscarPedidoProdutos)}}</td>
                            <td>{{$item->total_Pedido}}</td>                    
                            <td> 
                                <form action="{{route('admin.pedido.destroy',['pedido'=> $item->id])}}" method="POST">
                                
                                    @csrf
                                    @method('DELETE')
                                        <a href="{{route('admin.pedidoproduto',['id_pedido'=> $item->id , 'id_cliente' => $item->cliente_id])}}"   class="btn btn-sm btn-primary">Editar</a>
                                        <button type="submit" class="btn btn-sm btn-danger" >Apagar</button>                               
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