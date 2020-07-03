@extends('layouts.app')

@section('conteudo')

<div class="titulotabela">
    <h1>Tabela de Produtos</h1>
</div>


<div class="container">

    <table  id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
  >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço</th>
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
                                <button type="submit" class="btn btn-sm btn-danger" >Apagar</button>
                            
                        </form>


    
    
                    </td>
                </tr>
                @endforeach
    
           
          
        </tbody>
        {{-- <tfoot>
            <tr>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Preço </th>
                <th>Ação</th>
            </tr>
        </tfoot> --}}
    </table>
    
    <div>
        {{$products->links()}}

    </div>
  
    
</div>
    
@endsection