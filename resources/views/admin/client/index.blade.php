@extends('layouts.app2')

@section('conteudo')

<div class="titulotabela">
    <h1>Tabela de Clientes</h1>
</div>


<div class="container">

    <table id="datatable" class="table table-striped table-bordered table-sm" cellspacing="0"
    width="100%" >
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Telefone</th>
                <th>email</th>
                <th>Estado</th>
                <th>Cidade</th>
                <th>bairro</th>
                <th>Rua</th>
                <th>Numero</th>
                <th>Complemento</th>
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            
                @foreach ($client as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>{{$item->nome}}</td>
                    <td>{{$item->telefone}}</td>
                    <td>{{$item->email}}</td>
                    <td>{{$item->estado}}</td>
                    <td>{{$item->cidade}}</td>
                    <td>{{$item->bairro}}</td>
                    <td>{{$item->rua}}</td>
                    <td>{{$item->numero}}</td>
                    <td>{{$item->complemento}}</td>
                    <td>
                     <form action="{{route('admin.cliente.destroy',['cliente'=> $item->id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <a href="{{route('admin.cliente.edit',['cliente'=> $item->id])}}"   class="btn btn-sm btn-primary">Editar</a>
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
    
    
  
    
</div>
    
@endsection