@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card-body">
            <div class="card">
                <h1 class="text-center font-extrabold text-4xl my-3">Clientes</h1>
                <div class="mx-4">
                    <a class="btn btn-primary w-auto" href="{{url('cliente/create')}}">Crear</a>
                </div>
                <table class="table w-auto table-bordered m-4">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Email</th>
                            <th scope="col">Telefono</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $c)
                        <tr>
                            <td><strong>{{$c->id}}</strong></td>
                            <td>{{$c->nombre}}</td>
                            <td>{{$c->apellido}}</td>
                            <td>{{$c->email}}</td>
                            <td>{{$c->telefono}}</td>
                            <td class="d-flex gap-2"><a href="{{url('cliente/'.$c->id.'/edit')}}" class="btn btn-primary">Editar</a>
                                <form action="{{url('cliente/'.$c->id)}}" method="post">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input class="btn btn-danger" type="submit" value="Eliminar">
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                {{$clientes->links()}}
            </div>
        </div>
    </div>
</div>
@endsection