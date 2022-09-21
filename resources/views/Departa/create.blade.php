@extends("layouts.app")
@section("titulo", "Registrar Departamento")
@section("content")
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route("departamentos.store")}}">
                @csrf
                <div class="form-group">
                    <label class="label">Nombre</label>
                    <input required autocomplete="off" name="nombre" class="form-control"
                           type="text" placeholder="Nombre">
                </div>

              
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("departamentos.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection