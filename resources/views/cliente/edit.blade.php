@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="font-extrabold text-4xl text-center my-2">Editar producto</h1>
                    <form action="{{url('cliente/'.$clientes->id)}}" method="post" id="form-edit-client">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="cont-inputs my-3">
                            <label for="" class="font-bold">Nombre:</label>
                            <input class="form-control" type="text" id="nombre" name="nombre" value="{{$clientes->nombre}}">
                            @error('nombre')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs my-3">
                            <label for="" class="font-bold">Apellido:</label>
                            <input class="form-control" type="text" id="apellido" name="apellido" value="{{$clientes->apellido}}">
                            @error('apellido')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs my-3">
                            <label for="" class="font-bold">E-mail:</label>
                            <input class="form-control" type="text" id="email" name="email" value="{{$clientes->email}}">
                            @error('email')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs my-3">
                            <label for="" class="font-bold">Telefono:</label>
                            <input class="form-control" type="number" id="telefono" name="telefono" value="{{$clientes->telefono}}">
                            @error('telefono')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <input class="btn btn-primary" type="submit" value="Guardar">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection