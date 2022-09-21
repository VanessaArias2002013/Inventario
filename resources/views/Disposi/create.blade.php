@extends("layouts.app")
@section("titulo", "Registrar Dispositivos")
@section("content")
    <div class="row">
        <div class="col-12">
            <form method="POST" action="{{route("dispositivos.store")}}">
                @csrf
                <div class="col-md-6">
                    <label class="label">Marca</label>
                    <input required autocomplete="off" name="marca" class="form-control"
                           type="text" placeholder="Marca">
                </div>


                <div class="row mb-4">
                    <label for="marca" class="col-md-4 col-form-label text-md-end">{{ __('Marca') }}</label>

                    <div class="col-md-6">
                        <input id="marca" type="text" class="form-control @error('marca') is-invalid @enderror" name="marca" value="{{ old('marca') }}" required autocomplete="marca" autofocus>

                        @error('marca')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-4">
                    <label class="label">Modelo</label>
                    <input required autocomplete="off" name="modelo" class="form-control"
                           type="text" placeholder="Modelo">
                </div>

                
                <button class="btn btn-success">Guardar</button>
                <a class="btn btn-primary" href="{{route("dispositivos.index")}}">Volver al listado</a>
            </form>
        </div>
    </div>
@endsection