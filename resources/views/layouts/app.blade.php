<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto web</title>

     <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

     <!-- estilo do site -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    
     <!-- Datatable css  -->
    <link rel="stylesheet" href="{{asset('css/datatable.css')}}">


</head>
<body>
      

    <div class="row">

        <!-- menu lateral -->

        <div class="col-2" style="position:;">
            <nav class=" bg-light sidebar">

            <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link"   href="{{route('home')}}">Inicio</a>
            </li>

            <h6 class="sidebar-heading px-3 mt-4">
            
                <span>Tabelas</span>
                
            </h6>

            
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

            <h6 class="sidebar-heading px-3 mt-4">
            <span>Cadastros</span>
            </h6>
            <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link  @if(request()->is('admin/cliente/create'))  active @endif"  href="{{route('admin.cliente.create')}}">
                    cliente
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->is('admin/products/create'))  active @endif " href="{{route('admin.products.create')}}">
                   
                    Produto

                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(request()->is('admin/pedido/create')) active @endif " href="{{route('admin.pedido.create')}}">
                    Fazer Pedido
                </a>
            </li>
           
            </ul>

            </nav>
        </div>
        
        <div class="col-10">

            @yield('conteudo')

        </div>

    </div> 

   
  
      
  

   
  
    <!-- Bootstrap JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>


    <script>
    $("#add-produto").click(function () {

        $('#add').append(`  
        <div  class="form-group col-md-8" >

        <select class="custom-select mr-sm-2"  name="produto[]" >
        @if(request()->is('admin/pedido/create'))
        @foreach ($produtos as $produto)
        <option value="{{$produto->id}}">{{$produto->nome}}</option>

        @endforeach

        @endif 
        </select>

        </div>    

        <div class="form-group col-md-4">
        <label for="">Quantidade</label>
        <input name="quantidade[]" type="number" class="form-control">
        </div>

        </div> `);  

        });
    </script> 

     <!-- Datatable JavaScript  -->
     <script src="{{asset('js/datatable.js')}}"></script>
  
  
    
    
</body>
</html>