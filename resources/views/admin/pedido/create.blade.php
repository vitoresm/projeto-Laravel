@extends('layouts.app')

@section('conteudo')
<h1>Criar Produto</h1>

<div >
    <form action="{{route('admin.pedido.store')}}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="">Cliente</label>
            <select class="custom-select mr-sm-2" name="client_id" >
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->nome}}</option>
                @endforeach
            </select>
        </div> 
        
        <div class="form-row">

            <div class="form-group col-md-8">
                
                <label for="">Produto</label>
                
                <select class="custom-select mr-sm-2" name="Produto_id" >
                    @foreach ($produtos as $produto)
                        <option value="{{$produto->id}}">{{$produto->nome}}</option>
                    @endforeach
                </select>
            </div>    
                
                <div class="form-group col-md-4">
                    <label for="">Quantidade</label>
                    <input type="number" class="form-control">
                </div>

            </div> 

          
        
         
           
        
        </div>

        <div class="form-group">
            
            <label for="">Valor </label>
            <input type="text" name="" class="form-control">
        
        </div>
        
        <button type="submit" class="btn btn-success">Adicionar mais produto</button>
       
        <button type="submit" class="btn btn-primary">Efetuar pedido</button>

    </form>    
</div>
@endsection