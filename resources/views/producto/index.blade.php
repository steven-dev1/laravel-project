@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card-body">        
        <div class="card">
        <h1 class="text-center font-extrabold text-4xl my-3">Productos</h1>
        <div class="mx-4">
            <a class="btn btn-primary w-auto" href="{{url('producto/create')}}">Crear</a>
        </div>
        <table class="table w-auto table-bordered m-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Referencia</th>
                    <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($productos as $p)
                <tr>
                    <td><strong>{{$p->id}}</strong></td>
                    <td>{{$p->nombre}}</td>
                    <td>{{$p->descripcion}}</td>
                    <td>{{$p->precio}}</td>
                    <td>{{$p->referencia}}</td>
                    <td class="d-flex gap-2"><a href="{{url('producto/'.$p->id.'/edit')}}" class="btn btn-primary">Editar</a> 
                        <form action="{{url('producto/'.$p->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="btn btn-danger" type="submit" value="Eliminar">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        {{$productos->links()}}
    
        </div>
        </div>
        </div>
        </div>
@endsection