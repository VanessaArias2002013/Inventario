@extends("layouts.app")
@section("titulo", "Editar departamento")
@section("content")
<h5>Editar Departamento</h5>
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route("departamentos.update", [$departamento])}}">
                @method("PUT")
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required value="{{$departamento->nombre}}" autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>

                
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("departamentos.index")}}">Volver</a>
            </form>
        </div>
    </div>
@endsection