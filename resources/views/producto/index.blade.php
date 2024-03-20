<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/71debcd4d3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="bg-blue-500 w-screen flex justify-center items-center mb-3">
        <nav>
            <ul class="flex justify-center items-center gap-4 p-4">
                <li class=" text-white hover:bg-blue-800 rounded-lg transition-all duration-150"><a class="p-3 font-bold" href="../public">Inicio</a></li>
                <li class=" text-white hover:bg-blue-800 rounded-lg transition-all duration-150"><a class="p-3 font-bold" href="producto/">Productos</a></li>
                <li class=" text-white hover:bg-blue-800 rounded-lg transition-all duration-150"><a class="p-3 font-bold" href="cliente/">Clientes</a></li>
            </ul>
        </nav>
    </header>
    <main class="container">
        <h1 class="text-center font-extrabold text-4xl my-3">Productos</h1>
        <a class="p-2 rounded text-center text-white bg-blue-500 hover:bg-blue-600 ml-6" href="{{url('producto/create')}}">Crear</a>
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
                    <td class="d-flex gap-2"><a href="{{url('producto/'.$p->id.'/edit')}}" class="p-2 rounded text-center text-white bg-blue-500 hover:bg-blue-600">Editar</a> 
                        <form action="{{url('producto/'.$p->id)}}" method="post">
                            @csrf
                            {{method_field('DELETE')}}
                            <input class="p-2 rounded text-white bg-red-500 text-center hover:bg-red-600" type="submit" value="Eliminar">
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