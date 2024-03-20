<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/71debcd4d3.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Editar producto</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="w-screen h-screen flex justify-center items-center">
    <main class="w-2/4">
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
            <input class="p-2 rounded text-center text-white bg-blue-500 hover:bg-blue-600" type="submit" value="Guardar">
            <a href="" class="p-2 rounded text-center text-blue-600 hover:text-white bg-transparent hover:bg-blue-600">Volver</a>
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>