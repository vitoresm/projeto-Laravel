@extends('layouts.app2')

@section('conteudo')

<div class="container">

    <div class="card">
   
    <div class="card-header h5">Cadastar Cliente</div>

    <div class="card-body">
    
        <form action="{{route('admin.cliente.store')}}" method="POST">
            @csrf   
                <div class="form-group">
                    
                    <label for="">Nome Produto</label>
                    <input type="text" name="nome" class="form-control @error('nome') is-invalid 
                    
                    @enderror" value="{{old('nome')}}">
                    @error('nome')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Telefone</label>
                    <input type="text" name="telefone" class="form-control @error('telefone') is-invalid 
                    
                    @enderror" value="{{old('telefone')}}">
                    @error('telefone')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Email</label>
                    <input type="text" name="email" id="" class="form-control @error('email') is-invalid 
                    
                    @enderror" value="{{old('email')}}">
                    @error('email')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Estado</label>
                    <input type="text" name="estado" class="form-control @error('estado') is-invalid 
                    
                    @enderror" value="{{old('estado')}}">
                    @error('estado')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Cidade</label>
                    <input type="text" name="cidade" class="form-control @error('cidade') is-invalid 
                    
                    @enderror" value="{{old('cidade')}}">
                    @error('cidade')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Bairro</label>
                    <input type="text" name="bairro" class="form-control @error('bairro') is-invalid 
                    
                    @enderror" value="{{old('bairro')}}">
                    @error('bairro')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Rua</label>
                    <input type="text" name="rua" class="form-control @error('rua') is-invalid 
                    
                    @enderror" value="{{old('rua')}}">
                    @error('rua')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Numero</label>
                    <input type="text" name="numero" class="form-control @error('numero') is-invalid 
                    
                    @enderror" value="{{old('numero')}}">
                    @error('numero')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                
                
                <div class="form-group">
                    
                    <label for=""> Complemento </label>
                    <textarea id="my-textarea"  name="complemento" rows="2" class="form-control @error('complemento') is-invalid @enderror" value="{{old('complemento')}}"></textarea>
                   
                    @error('complemento')
                       
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
        
                    @enderror
                
                </div>
                
            
                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Salvar Cliente</button>
                </div>
                
            </form>  
    </div> 
   </div> 

</div>
@endsection