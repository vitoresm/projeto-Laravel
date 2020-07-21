@extends('layouts.app2')

@section('conteudo')

<div class="container">

    <div class="card">

        <div class="card-header h5">Tabela Clientes</div>

        <div class="card-body"> 
            <table id="datatable" class="display table table-striped table-bordered  "width="100%" >
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>E-mail</th>
                        <th>Estado</th>
                        <th>Cidade</th>
                        <th>bairro</th>
                        <th>Rua</th>
                        <th>N°</th>
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