@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
                <h1 class="font-extrabold text-4xl text-center">Registrar cliente</h1>
                <form action="{{url('cliente')}}" method="post" id="form-create-client">
                    @csrf
                    <div class="cont-inputs my-3">
                        <label for="" class="font-bold">Nombre:</label>
                        <input class="form-control" type="text" id="nombre" name="nombre">
                        @error('nombre')
                            <div class="bg-red-300 text-red-600 font-semibold py-1 px-2 mt-2 rounded-lg"><i class="fa-solid fa-triangle-exclamation"></i> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="cont-inputs my-3">
                        <label for="" class="font-bold">Apellido:</label>
                        <input class="form-control " type="text" id="apellido" name="apellido">
                        @error('descripcion')
                            <div class="bg-red-300 text-red-600 font-semibold py-1 px-2 mt-2 rounded-lg"><i class="fa-solid fa-triangle-exclamation"></i> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="cont-inputs my-3">
                        <label for="" class="font-bold">Email:</label>
                        <input class="form-control" type="email" id="email" name="email">
                        @error('referencia')
                            <div class="bg-red-300 text-red-600 font-semibold py-1 px-2 mt-2 rounded-lg"><i class="fa-solid fa-triangle-exclamation"></i> {{$message}}</div>
                        @enderror
                    </div>
                    <div class="cont-inputs my-3">
                        <label for="" class="font-bold">Telefono:</label>
                        <input class="form-control" type="number" id="telefono" name="telefono">
                        @error('precio')
                            <div class="bg-red-300 text-red-600 font-semibold py-1 px-2 mt-2 rounded-lg"><i class="fa-solid fa-triangle-exclamation"></i> {{$message}}</div>
                        @enderror
                    </div>
                    <input class="btn btn-primary" type="submit" value="Guardar">
                </form>
            </div>
        </div>
    </div>
</div>
@endsection