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
         <div class="col-2" id="menulateral">
            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-home" aria-selected="true">Inicio</a>
                <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-profile" aria-selected="false">Clientes <img onclick="{{route('admin.products.store')}}" style="margin-left:60px position: fixa" src="{{asset('storage/icons/add2.png')}}"></a>
                <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-messages" aria-selected="false">Produtos</a>
                <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#" role="tab" aria-controls="v-pills-settings" aria-selected="false">Pedidos</a>
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