<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/71debcd4d3.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Registrar cliente</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="h-screen w-screen flex justify-center items-center">
    <main class="w-2/4">
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
            <input class="p-2 rounded text-center text-white bg-blue-500 hover:bg-blue-600" type="submit" value="Guardar">
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>