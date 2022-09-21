@extends("layouts.app")
@section("titulo", "Editar dispositivo")
@section("content")
<h5>Editar Dispositivo</h5>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route("dispositivos.update", [$dispositivo])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Marca</label>
                    <input required value="{{$dispositivo->marca}}" autocomplete="off" name="marca" class="form-control"
                           type="text" placeholder="Marca">
                </div>

                <div class="form-group">
                    <label class="label">Modelo</label>
                    <input required value="{{$dispositivo->modelo}}" autocomplete="off" name="modelo" class="form-control"
                           type="text" placeholder="Modelo">
                </div>

                
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("dispositivos.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection