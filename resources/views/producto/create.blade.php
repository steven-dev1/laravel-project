@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="font-extrabold text-4xl text-center my-2">Crear producto</h1>
                    <form action="{{url('producto')}}" method="post" id="form-edit">
                        @csrf
                        <div class="cont-inputs">
                            <label for="">Nombre:</label>
                            <input class="form-control" type="text" id="nombre" name="nombre">
                            @error('nombre')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs">
                            <label for="">Descripción:</label>
                            <input class="form-control " type="text" id="descripcion" name="descripcion">
                            @error('descripcion')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs">
                            <label for="">Referencia:</label>
                            <input class="form-control" type="text" id="referencia" name="referencia">
                            @error('referencia')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs">
                            <label for="">Precio:</label>
                            <input class="form-control" type="number" id="precio" name="precio">
                            @error('precio')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <input class="btn btn-primary mt-3" type="submit" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection