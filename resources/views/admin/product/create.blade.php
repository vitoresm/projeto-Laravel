@extends('layouts.app')

@section('conteudo')
<h1>Criar Produto</h1>

<div >
    
    <form action="{{route('admin.products.store')}}" method="POST">
        
        @csrf
        
        <div class="form-group">
            
            <label for="">Nome Produto</label>
            <input type="text" name="nome" id="" class="form-control @error('nome') is-invalid 
            
            @enderror" value="{{old('nome')}}">
            @error('nome')
                <div class="invalid-feedback">
                   {{$message}}
                </div>
            
            @enderror
        
        </div>
        
        <div class="form-group">
            
            <label for="">Descrição</label>
            <textarea id="my-textarea"  name="descricao" rows="3" class="form-control @error('descricao') is-invalid @enderror" value="{{old('descricao')}}"></textarea>
           
            @error('descricao')
               
                <div class="invalid-feedback">
                    {{$message}}
                </div>

            @enderror
        
        </div>
        
       
        
        <div class="form-group">
            <label for="">Preço</label>
            <input type="text" name="preco" id="" class="form-control @error('preco') is-invalid @enderror" value="{{old('preco')}}">
            @error('preco')
            <div class="invalid-feedback">
               {{$message}}
            </div>
        @enderror
        </div>
        
        

        <div class="form-group">
            <button class="btn btn-lg" type="submit">criar produto</button>
        </div>
        
    </form>    
</div>
@endsection