@extends('layouts.app')

@section('conteudo')

<div class="container">

    <div style="padding: 12px ">

        <h5>Editar produto</h5>

    </div>
    
    <form action="{{route('admin.products.update', ['product' => $product->id])}}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            
            <label for="">Nome Produto</label>
            <input  class="form-control @error('nome') is-invalid 
            " value="{{old('nome')}}" @enderror type="text" name="nome"value="{{$product->nome}}" >
            @error('nome')
                <div class="invalid-feedback">
                   {{$message}}
                </div>
            
            @enderror
        
        </div>
        
        <div class="form-group">
            
            <label for="">Descrição</label>
                <textarea type="text" class="form-control" @error('descricao') class="is-invalid"  
                @enderror   name="descricao"  rows="3" ></textarea>
            
                @error('descricao')
                
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>

                @enderror
        
        </div>
        
       
        
        <div class="form-group">
            
            <label for="">Preço</label>
            <input type="text" name="preco" value="{{$product->preco}}"  class="form-control" @error('preco') class="is-invalid" value="{{old('preco')}}" @enderror  >
            @error('preco')
                <div class="invalid-feedback">
                    
                    {{$message}}
                
                </div>
            @enderror
        </div>


        <div class="form-group">
            <button class="btn btn-lg btn-primary" type="submit">Editar produto</button>
        </div>
        
       
 
    </form>    
</div>
@endsection