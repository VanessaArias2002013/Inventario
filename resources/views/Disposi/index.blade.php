@extends("layouts.app")
@section("titulo", "Dispositivos")
@section("content")


<h5> Agregar Marca/Modelo</h5>
    <div class="row">
     
        <div class="col-12">
            <a href="{{route("dispositivos.create")}}" class="btn btn-success mb-2">Agregar</a>
            
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>Marca</th>
                    <th>Modelo</th>
                    <th>Acción</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($dispositivos as $dispositivo)
                    <tr>
                        <td>{{$dispositivo->marca}}</td>
                        <td>{{$dispositivo->modelo}}</td>
                        <td>
                            <a class="btn btn-warning" href="{{route("dispositivos.edit",[$dispositivo->id])}}">Editar
                                <i class="fa fa-edit"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{route("dispositivos.destroy", [$dispositivo])}}" method="post">
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