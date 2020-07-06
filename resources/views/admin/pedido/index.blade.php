@extends('layouts.app')

@section('conteudo')

<div class="titulotabela">
    <h1>Tabela de Pedidos</h1>
</div>


<div class="container">

    <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
    width="100%" >
        <thead>
            <tr>
               
                <th>ID</th>
                <th>Nome do cliente</th>
                <th>Produto</th>
                <th>Valor</th>
               
            </tr>
        </thead>
        <tbody>
            
                @foreach ($pedidos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome_cliente}}</td>
                    <td>{{$item->telefone}}</td>
                    <td>{{$item->email}}</td>
         
                    <td>
                        <form action="{{route('admin.pedido.destroy',['pedido'=> $item->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <a href="{{route('admin.pedido.edit',['pedido'=> $item->id])}}"   class="btn btn-sm btn-primary">Editar</a>
                                <button type="submit" class="btn btn-sm btn-danger" >Apagar</button>
                            
                        </form>


    
    
                    </td>
                </tr>
                @endforeach
    
              
          
        </tbody>        
    </table>
    <div class="">
        {{$pedidos->links()}}

    </div>
    
    
  
    
</div>
    
@endsection