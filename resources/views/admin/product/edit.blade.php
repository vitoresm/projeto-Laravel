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
                        <textarea type="text" class="form-control" required @error('descricao') class="is-invalid"  
                        @enderror   name="descricao"  rows="3" ></textarea>
                    
                        @error('descricao')
                        
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>

                        @enderror
                
                </div>
                
                <div class="form-group">
                    
                    <label for="">Preço</label>
                    <input type="text" name="preco" value="{{$product->preco}}"  class="form-control" @error('preco') class="is-invalid" value="{{old('preco')}}" @enderror  name="preco" onKeyUp="mascaraMoeda(this, event)" >
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