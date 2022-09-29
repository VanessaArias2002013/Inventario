@extends("layouts.app")
@section("titulo", "Registrar Proveedor")
@section("content")

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <h1>Registrar Proveedor</h1>
  </head>
  <body>
   
  
    <div class="container">
    <div class="row">
        <div  class="col-9">
            <div class="row gy-5">
                <div class="p-3 border bg-light">
                  
                    
            <form method="POST" action="{{route("proveedores.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control form-control-lg" type="text" placeholder="Nombre" aria-label="Nombre">
                   
                </div>

                <div class="form-group">
                    <label class="label">Razón Social</label>
                    <input required autocomplete="off" name="razon_social" class="form-control form-control-lg" type="text" placeholder="Razón social" aria-label="Razón Social">
                    
                </div>

                <div class="form-group">
                    <label class="label">Dirección</label>
                    <input required autocomplete="off" name="direccion" class="form-control form-control-lg" type="text" placeholder="Dirección" aria-label="Dirección">
                    
                </div>

                <div class="form-group">
                    <label class="label">Correo</label>
                    <input required autocomplete="off" name="correo" class="form-control form-control-lg" type="text" placeholder="Correo" aria-label="Correo">
                </div>

                <div class="form-group">
                    <label class="label">Web</label>
                    <input required autocomplete="off" name="web" class="form-control form-control-lg" type="text" placeholder="Web" aria-label="Web">
                   
                </div>

                <div class="form-group">
                    <label class="label">Telefono</label>
                    <input required autocomplete="off" name="telefono" class="form-control form-control-lg" type="text" placeholder="Telefono" aria-label="Telefono">
                </div>

                <div class="form-group">
                    <label class="label">Ext</label>
                    <input required autocomplete="off" name="ext" class="form-control form-control-lg" type="text" placeholder="Ext" aria-label="Ext">
                </div>

                <div class="form-group">
                    <label class="label">Celular</label>
                    <input required autocomplete="off" name="celular" class="form-control form-control-lg" type="text" placeholder="Celular" aria-label="Celular">
                </div>

                <div class="form-group">
                    <label class="label">Tipo de Servicio</label>
                    <input required autocomplete="off" name="tipo_servicio" class="form-control form-control-lg" type="text" placeholder="Tipo de Servicio" aria-label="Tipo de Servicio">
                </div>

                <div class="form-group">
                    <label class="label">Notas</label>
                    <input required autocomplete="off" name="notas" class="form-control form-control-lg" type="text" placeholder="Notas" aria-label="Notas">
                </div>


                
              
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("proveedores.index")}}">Volver al listado</a>
            </form>
           
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>
@endsection
</html>