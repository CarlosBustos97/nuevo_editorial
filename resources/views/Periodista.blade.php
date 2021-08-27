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
        <!-- JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
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
            {{-- <input 
                type="hidden" 
                id="periodista" 
                name="periodista" 
                value="{{$periodista->id}}"
            > --}}
            <div class="row pt-4 offset-2">
                <div class="col-lg-1 col-sm-12 ">
                    Nombre: 
                </div>
                <div class="col-lg-4 col-sm-12">
                    <input 
                        class="form-control" 
                        id="nombrePeriodista"
                        name="nombrePeriodista"
                        type="text" 
                        value="{{$periodista->nombre}}">
                </div>
                <div class="col-lg-5 col-sm-12">
                    <button 
                        type="button" 
                        class="btn btn-dark" 
                        data-bs-toggle="modal" 
                        data-bs-target="#agregarArticulo">
                        Agregar Artículo
                    </button>
                </div>
            </div>                     
        </div>
        <section>
            <div class="container">
                @if ($periodista_articulo->count()>0)
                <div class="row mt-5" >
                    <label for="" class="label text-center">Artículo Escritos</label>
                    <table class="table table-striped table-hover">
                        <thead >
                            <th class="col-1">Articulo #</th>
                            <th class="col-5">Nombre</th>
                            
                            <th class="col-2">Eliminar</th>
                        </thead>
                        <tbody>
                            @foreach ($periodista_articulo as $item)  
                            <tr>
                                <td> {{$item->articulo->id}} </td>
                                <td> {{$item->articulo->nombre}} </td>
                                
                                <td>
                                    <button 
                                        type="button" 
                                        class="btn btn-sm btn-danger"
                                        id="btnEliminar"
                                        name="btnEliminar"
                                        onclick="eliminar({{$periodista->id}},{{$item->articulo->id}})">
                                        Eliminar
                                    </button>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>                            
                </div>
                @else
                <div class="alert alert-danger mt-2 text-center" role="alert">
                    Aún no tiene artículos escritos
                </div>
                @endif
            </div>
        </section>

        <!-- Button trigger modal -->
    
  
  <!-- Modal -->
  <div class="modal fade" id="agregarArticulo" tabindex="-1" aria-labelledby="agregarArticuloLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="agregarArticuloLabel">Artículo</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <div class="input-group mb-3">                
                <input type="text" id="nombreArticulo" name="nombreArticulo" class="form-control" placeholder="Nombre Artículo" aria-label="Username" aria-describedby="basic-addon1">
            </div>
            {{-- <div class="input-group mb-3">                
                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione revista</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
            </div> --}}
            <div class="input-group">                
                <textarea class="form-control" aria-label="With textarea" placeholder="Cuerpo del artículo"></textarea>
              </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
          <button type="button" class="btn btn-dark" onclick="agregarArticulo()">Guardar</button>
        </div>
      </div>
    </div>
  </div>
                 
        
    </body>
    <script>
        function agregarArticulo(){
            let nombreArticulo = $("#nombreArticulo").val();
            let periodista = {{$periodista->id}};
            // console.log(nombreArticulo, periodista);            
            let url = '{{route("storeArticulo")}}';
            console.log("datos", nombreArticulo, periodista);
            axios.post(url,{
                nombreArticulo: nombreArticulo,
                periodista: periodista
            }).then(function(response) {
                console.log(response.data);
                // console.log("Entro");
                location.reload();
            }).catch(function(error) {
                console.log(error.message);                
                
            });
        }
        function eliminar(periodista, articulo){
            let url = '{{route("delete.periodista_articulo")}}/'+periodista+"/"+articulo;            
            // console.log(url);
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
