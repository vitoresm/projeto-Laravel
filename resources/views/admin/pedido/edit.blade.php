@extends('layouts.app')

@section('conteudo')

<div>
    
    <h1>Editar Pedido</h1>
           
        <label for="">Editar Pedido do Cliente {{$cliente->nome}}</label>

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

                @foreach ($pedidos as $item)
                @php
                    $preco = null;
                @endphp

                <tr>
                    <td>{{$item->id}}</td>

                    <td> 

                    @foreach ($produtos as $i)


                    @php

                    if($i->id == $item->id_produto){

                    $nome = null;

                    $nome = $i->nome;
                    }

                    @endphp


                    @endforeach
                    {{$nome}}

                    </td>

                    <td>{{$item->quantidade}}</td>

                    <td>R$
                        @foreach ($produtos as $i)

                        @php

                        if ($i->id == $item->id_produto) {
                            echo   $preco = $item->quantidade * $i->preco;te
                        } 

                        @endphp

                        @endforeach


                    </td>

                                           
                    <td>

                        <form action="{{route('admin.pedidoprodutodelete',['id'=> $item->id, 'id_cliente' => $cliente->id, 'id_pedido' => $item->id_pedido ])}}" method="POST">
                        @csrf

                        <button type="submit" class="btn btn-sm btn-danger" >Apagar</button>

                        </form>

                    </td>

                </tr>
            
                @endforeach

            </tbody>


        </table>
            
        
            
        
        </div>

         
</div>
@endsection