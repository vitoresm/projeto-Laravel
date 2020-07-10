@extends('layouts.app')

@section('conteudo')

<div >
    
    <h1>Editar Pedido</h1>

    <form  action="" method="POST">
    @csrf 
        <div class="form-group">
            
        <label for="">Editar Pedido do Cliente {{$cliente->nome}}</label>

        @foreach ($pedidos as $item)

        <table>
            <tr>

                <th>ID </th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>

            </tr>

            <tr>
                <td>{{$item->id}}</td>
                <td>
                 irineru   
                </td>
                <td>{{$item->quantidade}}</td>
                <td>R$</td>
            </tr>
        </table>
            
        @endforeach
            
        
        </div>

       
    </form>    
</div>
@endsection