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

</head>
<body>
      

    <div class="row">

        <!-- menu lateral -->

        <div class="col-12  col-md-2">
         

            <nav class=" bg-light sidebar">  
            
              <div class="botao">
              <img class="imgbotao" src="{{asset('storage/lista.png')}}" alt="" srcset="">
              </div>



                <div class="menu">
                    <ul class="nav flex-column">

                        <li class="nav-item">
                            <a class="nav-link"   href="{{route('site')}}">Inicio</a>
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
                </div>

            </nav>
        </div>
        
        <div class="col-12 col-md-10">

            @yield('conteudo')

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

  

</body>
</html>