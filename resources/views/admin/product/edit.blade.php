@extends('layouts.app2')

@section('conteudo')

<div class="container">

    <div class="card">
    
        <div class="card-header h5"> Editar produto </div>
        
        <div class="card-body">

            <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">
            @csrf
            @method('PUT')

                <div class="form-group">
                    
                    <label for="">Nome Produto</label>
                    <input  class="form-control @error('nome') is-invalid 
                    " value="{{old('nome')}}" @enderror type="text" required name="nome"value="{{$product->nome}}" >
                    @error('nome')
                        <div class="invalid-feedback">
                        {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
                
                <div class="form-group">
                    
                    <label for="">Descrição</label>
                        <input type="text" class="form-control" value="{{$product->descricao}}" required @error('descricao') class="is-invalid"  
                        @enderror   name="descricao" >
                    
                        @error('descricao')
                        
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>

                        @enderror
                
                </div>

                <div class="input-group form-group mb-3">    
              
                    <div class="input-group-prepend">
                        <span class="input-group-text">R$</span>
                    </div>

                    <input type="text"  class="form-control" value="{{$product->preco}}" name="preco" onKeyUp="mascaraMoeda(this, event)"  value="{{old('preco')}}" />
                    
                    @error('preco')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                     @enderror
                </div>
                
               

                <div class="form-group">
                    <button class="btn btn-lg btn-primary" type="submit">Editar</button>
                </div>
                        
            </form>
        </div>
    </div>    
</div>
@endsection