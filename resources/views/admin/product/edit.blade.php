@extends('layouts.app')

@section('conteudo')
<h1>Editar Produto</h1>

<div >
    
    <form action="{{route('admin.products.store', ['product' => $product->id])}}" method="POST">
    @csrf
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
            <textarea class="form-control @error('descricao') is-invalid" value="{{old('descricao')}}" @enderror   name="descricao"  rows="3" ></textarea>
           
            @error('descricao')
               
                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>
        
       
        
        <div class="form-group">
            <label for="">Preço</label>
            <input type="text" name="preco" value="{{$product->preco}}"  class="form-control @error('preco') is-invalid" value="{{old('preco')}}" @enderror  >
            @error('preco')
            <div class="invalid-feedback">
               {{$message}}
            </div>
        @enderror
        </div>
        
        

        <div class="form-group">
            <button class="btn btn-lg" type="submit">editar produto</button>
        </div>
        
    </form>    
</div>
@endsection