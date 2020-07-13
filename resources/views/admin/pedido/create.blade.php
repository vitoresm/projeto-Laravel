@extends('layouts.app')

@section('conteudo')


<div class="container" style="" >
    
    <div style="padding: 12px ">

        <h5>Fazer Pedido</h5>

    </div>

    

    <form action="{{route('admin.pedido.store')}}" method="POST">
        @csrf
        
        <div class="form-group">
            <label >Cliente</label>
            <select class="custom-select mr-sm-2" name="cliente_id" >
                @foreach ($clients as $client)
                    <option value="{{$client->id}}">{{$client->nome}}</option>
                @endforeach
            </select>
        </div> 
        
        <div class="container">

            
        
                <div  id="add" class="row"   >
                    
                    <div class="div2 col-12 col-sm-4 col-md-6" style="border: 1px solid #3490dc">
                        
                        <div>
                            <label >Produto</label>
                            <select class="custom-select"  name="produto[]" >
                                @foreach ($produtos as $produto)
                                    <option value="{{$produto->id}}">{{$produto->nome}}</option>
                                @endforeach
                            </select>                      
                        </div>    
                        <div class="form-group ">
                            <label >Quantidade</label>
                            <input type="number" name="quantidade[]"  min="1" max="1000" class="form-control">
                        </div>
                        
                    </div>

                </div> 
             

           </div>    

          <div style="padding: 10px">
            <button  type="button" id="add-produto" class="btn btn-success">Adicionar mais produto</button>
          </div>
           
        
        </div>

       
        <div class="form-group">            
            <label >Valor </label>
            <input  type="text" >
        </div>

        
  
        <button type="submit" class="btn btn-primary">Efetuar pedido</button>

    </form>    
</div>



@endsection