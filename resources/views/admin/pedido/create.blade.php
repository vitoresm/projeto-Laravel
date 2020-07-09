@extends('layouts.app')

@section('conteudo')
<h1>fazer Pedido</h1>

<div >
    <form action="{{route('admin.pedido.store')}}" method="POST">
        @csrf
        
        <div class="form-group">
            <label for="">Cliente</label>
            <select class="custom-select mr-sm-2" name="cliente_id" >
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->nome}}</option>
                @endforeach
            </select>
        </div> 
        
        <div class="form-row">

           <div id="clonar ">

            <label for="">Produto</label>

                <div  id="add" class="form-group"  >
                    
                    <select class="custom-select mr-sm-2"  name="produto[]" >
                        @foreach ($produtos as $produto)
                            <option value="{{$produto->id}}">{{$produto->nome}}</option>
                        @endforeach
                    </select>
              
                   
                    
                    <div class="form-group col-md-4">
                        <label for="">Quantidade</label>
                        <input type="number" name="quantidade[]" class="form-control">
                    </div>
                </div> 
             </div> 

           </div>    

           <button  type="button" id="add-produto" class="btn btn-success">Adicionar mais produto</button>
           
        
        </div>

       
       <div class="form-group">            
            <label for="">Valor </label>
            <input  type="text" name="" class="form-control">
        </div>
  
        <button type="submit" class="btn btn-primary">Efetuar pedido</button>

    </form>    
</div>



@endsection