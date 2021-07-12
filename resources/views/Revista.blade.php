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
        <div class="container mt-4">            
            <div class="form">
                <form action="{{route('update.revista',$revista_articulo[0]->revista->id)}}" 
                    method="PUT">
                    <input 
                        type="hidden" 
                        id="revista" 
                        name="revista" 
                        value="{{$revista_articulo[0]->revista->id}}">
                        <div class="row">
                            <div class="col-lg-1 pt-1 col-sm-12">
                                Titulo: 
                            </div>
                            <div class="col-lg-9 pt-1 col-sm-12">
                                <input 
                                    class="form-control" 
                                    id="nombreRevista"
                                    name="nombreRevista"
                                    type="text" 
                                    value="{{$revista_articulo[0]->revista->titulo}}">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-1 pt-1 col-sm-12">
                                Articulo: 
                            </div>
                            <div class="col-lg-9 pt-1 col-sm-12">
                                <select 
                                    name="idArticulo" 
                                    id="idArticulo" 
                                    class="form-select"> 
                                    @foreach ($articulos as $item)                
                                    <option value="{{$item->id}}">                             
                                        {{$item->nombre}}
                                    </option>    
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-lg-2 text-center pt-2 col-sm-12"> 
                                <button class="btn btn-sm btn-dark ps-3 pe-3" type="submit">Agregar</button>
                            </div>
                        </div>
                </form>
                        <div class="row mt-5" >
                            <label for="" class="label text-center">Articulos Actuales</label>
                            <table class="table table-striped table-hover">
                                <thead >
                                    <th class="col-1">Articulo #</th>
                                    <th class="col-5">Titulo</th>
                                    {{-- <th class="col-2">Ejmplares</th>
                                    <th class="col-2">Páginas</th> --}}
                                    <th class="col-2">Eliminar</th>
                                </thead>
                                <tbody>
                                    @foreach ($revista_articulo as $item)  
                                    <tr>
                                        <td> {{$item->articulo->id}} </td>
                                        <td> {{$item->articulo->nombre}} </td>
                                        {{-- <td> {{$item->revista->num_ejemplares}} </td>
                                        <td> {{$item->revista->num_paginas}} </td> --}}
                                        <td>
                                            <button 
                                                type="button" 
                                                class="btn btn-sm btn-danger"
                                                id="btnEliminar"
                                                name="btnEliminar"
                                                onclick="eliminar({{$revista_articulo[0]->revista->id}},{{$item->articulo->id}})">
                                                Eliminar
                                            </button>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>                            
                        </div>                
            </div>      
        </div>
    </body>
    <script>
        function eliminar(revista, articulo){
            let url = '{{route("delete.revista_articulo")}}/'+articulo+"/"+revista;            
            console.log(url);
            axios.delete(url).then(function(response) {
                // console.log(response.data);
                // console.log("Entro");
                location.reload();
            }).catch(function(error) {
                console.log(error.message);                
                
            });
        }
        
    </script>
</html>
