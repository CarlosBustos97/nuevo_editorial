<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editorial</title>
        <!-- Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- axios -->
        <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
        
    </head>
    <body>
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container">
                    <a class="navbar-brand" href="#">Editorial</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{route('articulos')}}">Articulos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('revistas')}}">Revistas</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Empleados</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{route('periodistas')}}">Periodistas</a>
                            </li>
                        </ul>             
                    </div>
                </div>
            </nav>
        </div>
        <div class="container-fluid">                
            
                @foreach ($articulos as $articulo)
                <div class="card-group text-center">                
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Articulo: {{$articulo->nombre}}</h5>                                
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>                            
                                <form action="{{route('articulo',$articulo->id)}}" method="GET" >
                                    <button 
                                        type="submit" 
                                        class="btn btn-dark btn-sm border m-1" >
                                        Ver
                                    </button>
                                </form>
                        </div>                             
                    </div>
                </div>                   
                @endforeach  
            
        </div>
        
            
                
                


        
    </body>
    <script>
        // function verArticulo(id){
        //     var url =  "{{asset('articulo')}}/"+id;
        //     console.log(url);
        //     axios.get(url).then(function(response) {
                
        //         console.log(response.data);

        //     }).catch(e => {
        //         // Podemos mostrar los errores en la consola
        //         console.log(e);
        //     });
            
        // }
    </script>
</html>
