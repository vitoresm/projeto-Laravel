@extends('layouts.app')

@section('conteudo')

<div class="container">
    
    <div style="padding: 14px ">

        <h5>Salvar Cliente</h5>

    </div>

    <div>
    
        <form  action="{{route('admin.cliente.update', ['cliente' => $client->id])}}" method="POST">
            @csrf   
            @method('PUT')
                <div class="form-group">
                    
                    <label for="">Nome Produto</label>
                    <input type="text" name="nome"  value="{{$client->nome}}" class="form-control @error('nome') is-invalid 
                    
                    @enderror" value="{{old('nome')}}">
                    @error('nome')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Telefone</label>
                    <input type="text" name="telefone"  value="{{$client->telefone}}" class="form-control @error('telefone') is-invalid 
                    
                    @enderror" value="{{old('telefone')}}">
                    @error('telefone')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Email</label>
                    <input type="text" name="email"  value="{{$client->email}}" class="form-control @error('email') is-invalid 
                    
                    @enderror" value="{{old('email')}}">
                    @error('email')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Estado</label>
                    <input type="text" name="estado"  value="{{$client->estado}}" class="form-control @error('estado') is-invalid 
                    
                    @enderror" value="{{old('estado')}}">
                    @error('estado')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Cidade</label>
                    <input type="text" name="cidade"  value="{{$client->cidade}}" class="form-control @error('cidade') is-invalid 
                    
                    @enderror" value="{{old('cidade')}}">
                    @error('cidade')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Bairro</label>
                    <input type="text" name="bairro"  value="{{$client->bairro}}" class="form-control @error('bairro') is-invalid 
                    
                    @enderror" value="{{old('bairro')}}">
                    @error('bairro')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Rua</label>
                    <input type="text" name="rua"  value="{{$client->rua}}" class="form-control @error('rua') is-invalid 
                    
                    @enderror" value="{{old('rua')}}">
                    @error('rua')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                <div class="form-group">
                    
                    <label for="">Numero</label>
                    <input type="text" name="numero"  value="{{$client->numero}}" class="form-control @error('numero') is-invalid 
                    
                    @enderror" value="{{old('numero')}}">
                    @error('numero')
                        <div class="invalid-feedback">
                           {{$message}}
                        </div>
                    
                    @enderror
                
                </div>
        
                
                
                <div class="form-group">
                    
                    <label for=""> Complemento </label>
                    <input  type="text" name="complemento"   value="{{$client->complemento}}" class="form-control @error('complemento') is-invalid @enderror" value="{{old('complemento')}}"></input>
                   
                    @error('complemento')
                       
                        <div class="invalid-feedback">
                            {{$message}}
                        </div>
        
                    @enderror
                
                </div>
                
            
                <div class="form-group">
                    <button class="btn btn-primary" rows="2" type="submit">Salvar Cliente</button>
                </div>
                
            </form> 
    </div>   
</div>
@endsection