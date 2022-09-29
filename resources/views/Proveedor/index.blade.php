@extends("layouts.app")
@section("titulo", "Proveedores")
@section("content")
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  </head>

<h1> Agregar Proveedores</h1>
    <div class="row">
     
        <div class="col-12">
            <a href="{{route("proveedores.create")}}" class="btn btn-success mb-2">Agregar</a>
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Razón Social</th>
                    <th>Dirección</th>
                    <th>Correo</th>
                    <th>Web</th>
                    <th>Telefono</th>
                    <th>Ext</th>
                    <th>Celular</th>
                    <th>Tipo de Servicio</th>
                    <th>Notas</th>
                    <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($proveedores as $proveedor)
                    <tr>
                        <td>{{$proveedor->nombre}}</td>
                        <td>{{$proveedor->razon_social}}</td>
                        <td>{{$proveedor->direccion}}</td>
                        <td>{{$proveedor->correo}}</td>
                        <td>{{$proveedor->web}}</td>
                        <td>{{$proveedor->tel}}</td>
                        <td>{{$proveedor->ext}}</td>
                        <td>{{$proveedor->celular}}</td>
                        <td>{{$proveedor->tipo_servicio}}</td>
                        <td>{{$proveedor->notas}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route("proveedores.edit",[$proveedor->id])}}">Editar
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route("proveedores.destroy", [$proveedor])}}" method="post">
                                @method("Delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

                </tbody>
            </table>

        </div>
    </div>
@endsection