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

     <!-- menu lateral -->
     <div class="row">
         <div class="col-2" i>
            <div class="nav flex-column " aria-orientation="vertical">
                
                <li>
                
                    <a class="nav-link"   href="{{route('home')}}">Inicio</a>

                </li>

                {{-- <img onclick="{{route('admin.products.store')}}"style="margin-left:60px position: fixa" src="{{asset('storage/icons/add2.png')}}"> --}}

                <li>

                    <a class="nav-link"  href="{{route('admin.client.index')}}" role="tab" >Clientes </a>

                </li>

                <li>

                    <a class="nav-link"  href="{{route('admin.products.index')}}" >Produtos</a>

                </li>

              </div>
             
         </div>

         <div class="col-9">
            
            @yield('conteudo')
    
         </div>

     </div>
     
   
  
      
  

   
  
    <!-- Bootstrap JavaScript -->
    <script src="{{asset('js/app.js')}}"></script>

     <!-- Datatable JavaScript  -->
     <script src="{{asset('js/datatable.js')}}"></script>
  
  
    
    
</body>
</html>