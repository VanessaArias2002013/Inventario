@extends("layouts.app")
@section("titulo", "Registrar Dispositivos")
@section("content")

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <h1>Registrar Dispositivos</h1>
  </head>
  <body>
   
    <div class="container">
        <div class="row">
            <div  class="col-9">
                <div class="row gy-5">
                    <div class="p-3 border bg-light">

            <form method="POST" action="{{route("dispositivos.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Marca</label>
                    <input required autocomplete="off" name="marca" class="form-control form-control-lg" type="text" placeholder="Marca" aria-label="Marca">
                   
                </div>

                <div class="form-group">
                    <label class="label">Modelo</label>
                    <input required autocomplete="off" name="modelo" class="form-control form-control-lg" type="text" placeholder="Modelo" aria-label="Modelo">
                    
                </div>

                
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("dispositivos.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
        
</body>
@endsection
</html>