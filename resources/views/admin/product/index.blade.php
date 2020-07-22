@extends('layouts.app2')

@section('conteudo')

<div class="container">

    <div class="card">
        <div class="card-header h5">Tabela Produtos</div>

            <div class="card-body">
                <table  id="tabelaFormatada" class="display table table-striped table-bordered " cellspacing="0">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th >Valor</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                            @foreach ($products as $item)
                            <tr>
                                <td>{{$item->id}}</td>
                                <td>{{$item->nome}}</td>
                                <td>{{$item->descricao}}</td>
                                <td>{{$item->preco}}</td>
                                <td>
                                 
                                    <form action="{{route('admin.products.destroy',['product'=> $item->id])}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                            <a href="{{route('admin.products.edit',['product'=> $item->id])}}"   class="btn btn-sm btn-primary">Editar</a>
                                           
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