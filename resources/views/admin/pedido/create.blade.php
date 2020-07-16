@extends('layouts.app2')

@section('conteudo')

<div class="container" style="" >
    
    <div class="card">
    <div class="card-header h5">Fazer Pedido</div>
    
    <div class="card-body">
        <form action="{{route('admin.pedido.store')}}" method="POST">
            @csrf
            
            <div class="form-group">
                <label >Cliente</label>
                <select class="custom-select mr-sm-2" name="cliente_id" >
                    @foreach ($clients as $client)
                        <option  value="{{$client->id}}">{{$client->nome}}</option>
                    @endforeach
                </select>
            </div> 
            
            <div class="container">
            
                    <div  id="add" class="row"   >
                        
                        <div class="col-12 col-sm-4 col-md-3" style="margin:9px; border: 1px solid #3490dc">
                            
                            <div>
                                <label >Produto</label>
                                <select class="custom-select"  name="produto[]" >
                                   
                                    @foreach ($produtos as $produto)
                                
                                        <option value="{{$produto->id}}">{{$produto->nome}} | R$ {{$produto->preco}}</option>        
    
                                    @endforeach
    
                                </select>                      
                            </div> 
                                   
                            <div class="form-group ">
                                <label >Quantidade</label>
                                <input type="number" id="spinner" class="form-control" name="quantidade[]"  min="1" max="1000" step="1" required data-decimals="0"/>
                            </div>
                            
                        </div>
    
                    </div> 
                 
               </div>    
    
              <div style="padding: 10px">
                <button  type="button" id="add-produto" class="btn btn-success">Adicionar mais produto</button>
              </div>    
            
            </div>
           
            <div class="form-group">           
    
            </div>        
      
            <button type="submit" class="btn btn-primary">Efetuar pedido</button>
    
        </form>
    </div>
    </div>    
</div>

@endsection

