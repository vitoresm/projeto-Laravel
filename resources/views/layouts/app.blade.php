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
                <a class="nav-link @if(request()->is('admin/client')) active @endif"  href="{{route('admin.client.index')}}" role="tab" >Clientes</a>

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
                <a class="nav-link  @if(request()->is('admin/client/create'))  active @endif"  href="{{route('admin.client.create')}}">
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

     <!-- Datatable JavaScript  -->
     <script src="{{asset('js/datatable.js')}}"></script>
  
  
    
    
</body>
</html>