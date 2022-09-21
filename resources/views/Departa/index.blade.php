@extends("layouts.app")
@section("titulo", "Departamentos")
@section("content")
<h5>Agregar Departamento</h5>
    <div class="row">
        <div class="col-12">
            <a href="{{route("departamentos.create")}}" class="btn btn-success mb-2">Agregar</a>
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($departamentos as $departamento)
                    <tr>
                        <td>{{$departamento->nombre}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route("departamentos.edit",[$departamento->id])}}">Editar
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route("departamentos.destroy", [$departamento])}}" method="post">
                                @method("Delete")
                                @csrf
                                <button type="submit" class="btn btn-danger">Eliminar
                                    <i class="fa fa-trash"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection