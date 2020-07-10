@extends('layouts.app')

@section('conteudo')

<div class="titulotabela">
    <h1>Tabela de Pedidos</h1>
</div>


<div class="container">

    <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0"
    width="100%" >
        <thead>
            <tr>
               
                <th>ID</th>
                <th>Nome do Cliente</th>
                <th>Valor Total</th>
                <th>Ação</th>
               
            </tr>
        </thead>
        <tbody>
            
                @foreach ($pedidos as $item)
                <tr>
                    <td>{{$item->id}}</td>
                    <td>
                        @foreach ($clientes as $i)
                            @if($item->cliente_id ==  $i->id) {{$i->nome}}
                            
                           
                            @endif 
                       
                         @endforeach
                    

                    </td>
                    <td>

                      R$
                      @foreach ($produtospedido as $it)
                        
                        @if($item->id == $it->id_pedido)    
                            


                            @foreach ($produtos as $produto)
                                
                                @php 
                                
                                if($it->id_produto == $produto->id){
                                
                                $preco = $preco ?? 0;

                                $preco = $preco + ($it->quantidade * $produto->preco);
                                
                                }
                                

                                @endphp


                                
                                
                            @endforeach

                            


                        @endif
                            
                        @endforeach

                        @php echo $preco; @endphp
                            
                      

                            
                         
                           
                            
                     

                    </td>
                    <td> 
                        
                        <form action="{{route('admin.pedido.destroy',['pedido'=> $item->cliente_id])}}" method="POST">
                            @csrf
                            @method('DELETE')
                                <a href="{{route('admin.pedidoproduto',['id_pedido'=> $item->id , 'id_cliente' => $item->cliente_id])}}"   class="btn btn-sm btn-primary">Editar</a>
                                <button type="submit" class="btn btn-sm btn-danger" >Apagar</button>
                        </form>

                    </td>
                </tr>
                @endforeach
    
              
          
        </tbody>        
    </table>
    <div class="">
        

    </div>
    
    
  
    
</div>
    
@endsection