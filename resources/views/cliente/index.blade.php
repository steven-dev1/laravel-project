<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
</head>
<body>
    <main class="container">
        <a class="btn btn-primary mt-4" href="{{url('cliente/create')}}">Registrar</a>
        <table class="table table-striped table-hover table-bordered m-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Telefono</th>
                    <th scope="col"></th>
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
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>