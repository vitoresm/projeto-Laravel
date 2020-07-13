<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto web</title>

     <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <!-- site JavaScript  -->
    <script src="{{asset('js/app.js')}}"></script>
     
      <!-- estilo do site -->

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
     <!-- Datatable css  -->
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">
    
    <script src="{{asset('js/bootsatrap-input-spinner.js')}}"></script>


</head>
<body>
      

    <div class="row">

        <!-- menu lateral -->

        <div class="col-12  col-md-2" style="height: 85px">
         

            <nav class=" bg-light sidebar">  
            
              <div class="botao">
              <img class="imgbotao" src="{{asset('storage/lista.png')}}" alt="" srcset="">
              </div>



            <div class="menu">
                <ul class="nav  mr-auto flex-column">

                    <li class="nav-item">
                        <a class="nav-link"   href="{{route('home')}}">Inicio</a>
                    </li>
        
                    <!--<h6 class="sidebar-heading px-3 mt-4">
                    
                        <span>Tabelas</span>
                        
                    </h6> -->
        
                    
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('admin/cliente')) active @endif"  href="{{route('admin.cliente.index')}}" role="tab" >Clientes</a>
        
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('admin/products')) active @endif"  href="{{route('admin.products.index')}}" >
                            Produtos
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('admin/pedido')) active @endif"  href="{{route('admin.pedido.index')}}" >Pedidos</a>
                    </li>
        
                   
                    <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link  @if(request()->is('admin/cliente/create'))  active @endif"  href="{{route('admin.cliente.create')}}">
                            Cadastar cliente
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('admin/products/create'))  active @endif " href="{{route('admin.products.create')}}">
                           
                           Cadastar Produto
        
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link @if(request()->is('admin/pedido/create')) active @endif " href="{{route('admin.pedido.create')}}">
                            Fazer Pedido
                        </a>
                    </li>
                   
                    </ul>
            </div>

            </nav>
        </div>
        
        <div class="col-12 col-md-10">

            @yield('conteudo')

        </div>

    </div> 

   
  
      
  

   
  
    <!-- Bootstrap JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>


    <script>

    
$(document).ready(function(){

$( '.botao').click(function(){
   
    $('.menu ul li').toggle();

});

});
    $("#add-produto").click(function () {

        $('#add').append(`  
       
        <div style="border: 1px solid #3490dc" class="div2 col-12 col-sm-4 col-md-6">    
        <label >Produto</label>

        <select class="custom-select"  name="produto[]" >
            
            @if(request()->is('admin/pedido/create'))
            @foreach ($produtos as $produto)
                
                <option value="{{$produto->id}}">{{$produto->nome}}</option>

            @endforeach
            @endif 
        </select>

          

        <div class="form-group">
             <label >Quantidade</label>
             <input name="quantidade[]"   min="1" max="1000" type="number" class="form-control">
        </div>
        </div>

        </div>
         `);  

         
        
        });

        $("input[type='number']").inputSpinner();
    </script> 

  

     <!-- site JavaScript  -->
     <script src="{{asset('js/site.js')}}"></script>

   
  
  
    
    
</body>
</html>