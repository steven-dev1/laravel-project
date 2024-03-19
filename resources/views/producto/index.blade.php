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
        <a class="btn btn-primary mt-4" href="{{url('producto/create')}}">Crear</a>
        <table class="table table-striped table-hover table-bordered m-4">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nombre</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Referencia</th>
                    <th scope="col"></th>
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
    </main>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>