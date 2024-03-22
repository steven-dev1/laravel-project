@extends('layouts.app')
@section('content')
<div class="row">
        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h1 class="font-extrabold text-4xl text-center my-2">Editar producto</h1>
                    <form action="{{url('producto/'.$producto->id)}}" method="post" id="form-edit">
                        @csrf
                        {{method_field('PUT')}}
                        <div class="cont-inputs my-3">
                            <label for="" class="font-bold">Nombre:</label>
                            <input class="form-control" type="text" id="nombre" name="nombre" value="{{$producto->nombre}}">
                            @error('nombre')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs my-3">
                            <label for="" class="font-bold">Descripcion:</label>
                            <input class="form-control" type="text" id="descripcion" name="descripcion" value="{{$producto->descripcion}}">
                            @error('descripcion')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs my-3">
                            <label for="" class="font-bold">Referencia:</label>
                            <input class="form-control" type="text" id="referencia" name="referencia" value="{{$producto->referencia}}">
                            @error('referencia')
                                <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="cont-inputs my-3">
                            <label for="" class="font-bold">Precio:</label>
                            <input class="form-control" type="number" id="precio" name="precio" value="{{$producto->precio}}">
                            @error('precio')
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