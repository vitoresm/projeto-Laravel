<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Projeto web</title>

      <!-- bootstrap -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
   
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
		
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--bootstrap sidebar -->
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">

    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    

</head>
<body>
     
    <body>
		
		<div class="wrapper d-flex align-items-stretch">
			<nav id="sidebar">
				<div class="custom-menu">
					<button type="button" id="sidebarCollapse" class="btn btn-primary">
	                     <i class="fa fa-bars"></i>
	                    <span class="sr-only">Toggle Menu</span>
	        </button>
       
        </div>
	  		<h1><a class="logo">Projeto Laravel</a></h1>
        <ul class="list-unstyled components mb-5">
            

                <li class="nav-item">
                    <a class="nav-link"   href="{{route('site')}}">Inicio</a>
                </li>
    
                <!--<h6 class="sidebar-heading px-3 mt-4">
                
                    <span>Tabelas</span>
                    
                </h6> -->
    
                
                <li class="nav-item  @if(request()->is('admin/cliente')) active @endif">
                    <a class="nav-link list-unstyled"  href="{{route('admin.cliente.index')}}" role="tab" >Clientes</a>
    
                </li>
                <li class="nav-item  @if(request()->is('admin/products')) active @endif">
                    <a class="nav-link"  href="{{route('admin.products.index')}}" >
                        Produtos
                    </a>
                </li>
                <li class="nav-item @if(request()->is('admin/pedido')) active @endif">
                    <a class="nav-link "  href="{{route('admin.pedido.index')}}" >Pedidos</a>
                </li>
    
            
        
                <li class="nav-item @if(request()->is('admin/cliente/create'))  active @endif">
                    <a class="nav-link  "  href="{{route('admin.cliente.create')}}">
                        Cadastar cliente
                    </a>
                </li>
                <li class="nav-item  @if(request()->is('admin/products/create'))  active @endif">
                    <a class="nav-link" href="{{route('admin.products.create')}}">
                    
                    Cadastar Produto
    
                    </a>
                </li>
                <li class="nav-item @if(request()->is('admin/pedido/create')) active @endif">
                    <a class="nav-link  " href="{{route('admin.pedido.create')}}">
                        Fazer Pedido
                    </a>
                </li>
            
            
                <!-- Authentication Links -->
                @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li> 
                @if(Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
                @else
                <li class="dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        Usuario: {{ Auth::user()->name }} <span class="caret"></span>
                    </a>

                    <div class="dropdown-menu " aria-labelledby="navbarDropdown">
                        
                        <a class="dropdown-item" href="{{ route('logout') }}"
                            onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                            Sair
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                    </div>
                </li>
                    @endguest
            
        </ul>

    	</nav>

        <!-- Page Content  -->
      <div id="content" class="p-4 p-md-5 pt-5">
       
        @yield('conteudo')
        

      </div>
		</div>



        </div>

    
   
  
      
  

   
  
    <!-- Bootstrap JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>

   
    <script src="{{asset('js/bootsatrapinputpinner.js')}}"></script>

    <!-- JavaScript -->
    <script src="{{asset('js/site.js')}}"></script>

    <script>            
        
            $("#add-produto").click(function () {

          
                
                $('#add').append(` 
               
                <div class="col-12 col-sm-4 col-md-3" style=" margin:9px; border: 1px solid #3490dc">
                        
                        <div>
                            <label >Produto</label>
                            <select class="custom-select"  name="produto[]" >
                                @if(request()->is('admin/pedido/create'))
                                @foreach ($produtos as $produto)
                            
                                <option value="{{$produto->id}}">{{$produto->nome}} | R$ {{$produto->preco}}</option>
                                   
                                @endforeach
                                @endif
                            </select>                      
                        </div> 
                        <div class="form-group ">
                            <label >Quantidade</label>
                            <input type="number" class="form-control" id="spinner" name="quantidade[]"  min="1" max="1000" step="1" required data-decimals="0"/>
                        </div>
                        
                    </div>
                 `);      
                 
                
                });
            </script> 
            
        <link rel="stylesheet" type="text/css" href="{{asset('css/jquery.dataTables.min.css')}}">
            
        <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
            
       <!--  sidebar -->
        <script src="{{asset('js/menu.js')}}"></script>

       
</body>
</html>