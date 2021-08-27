<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editorial</title>
        <!--popper js -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
        <!-- Bootstrap-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                  Revistas
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="navbarScrollingDropdown">
                                    <li><a class="dropdown-item" href="{{route('agregarRevistas')}}">Añadir Revista</a></li>
                                    <li><a class="dropdown-item" href="{{route('revistas')}}">Ver Revistas</a></li>
                                  
                                </ul>
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
        <div class="container">
            <div class="form">            
                <form action="">
                    <div class="row pt-3">
                        <div class="col-lg-1 pt-2 ps-4 pe-0">
                            Titulo:
                        </div>
                        <div class="col-lg-3 ps-0">
                            <input type="text" class="form-control" id="titulo" placeholder="Titulo">
                        </div>
                        <div class="col-lg-1 pt-2 ps-0 pe-0">
                            Fecha:
                        </div>
                        <div class="col-lg-4 ps-0 pe-5 text-center">
                            <input type="date" class="form-control" id="ejemplares" placeholder="1">
                        </div>
                    </div>
                    <div class="row pt-3">
                        <div class="col-lg-1 pt-2 ps-3 pe-0">
                            Páginas:
                        </div>
                        <div class="col-lg-1 ps-2 pe-4 text-center">
                            <input type="number" class="form-control" id="paginas" placeholder="1">
                        </div>
                        <div class="col-lg-1 pt-2 ps-0 pe-0">
                            Ejemplares:
                        </div>
                        <div class="col-lg-1 ps-2 pe-4 text-center">
                            <input type="number" class="form-control" id="ejemplares" placeholder="1">
                        </div>
                        <div class="col-lg-1 pt-2 ps-0 pe-0">
                            Genero:
                        </div>
                        <div class="col-lg-4 ps-0 pe-5 text-center">
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Seleccione...</option>
                                @foreach ($tipos as $item)
                                    <option value="{{$item->id}}">{{$item->tipo}}</option>
                                @endforeach
                                
                                
                              </select>
                        </div>
                    </div>
                </form>
            </div>
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
