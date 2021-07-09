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
        <div class="container">

            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <a class="navbar-brand" href="#">Editorial</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Articulos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Revistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Revistas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Periodistas</a>
                    </li>
                    </ul>             
                </div>
            </nav>
            <div class="form">

                <div class="row">
                    Titulo: <input class="form-control" type="text" value="{{$revista_articulo[0]->articulo->nombre}}">
                    Revista: 
                    <select name="" id="" class="form-control"> 
                        @foreach ($revista_articulo as $item)                
                        <option value="{{$item->revista->id}}">                             
                            {{$item->revista->titulo}}
                        </option>    
                        @endforeach
                    </select>
                </div>
            </div>
            
        
            
                
                


        </div>
    </body>
    <script>
        
        
    </script>
</html>
