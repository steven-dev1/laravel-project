<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Registrar cliente</title>
</head>
<body>
    <main class="container">
        <form action="{{url('cliente')}}" method="post" id="form-create-client">
            @csrf
            <h1>Registrar cliente</h1>
            <div class="cont-inputs">
                <label for="">Nombre:</label>
                <input class="form-control" type="text" id="nombre" name="nombre">
                @error('nombre')
                    <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                @enderror
            </div>
            <div class="cont-inputs">
                <label for="">Apellido:</label>
                <input class="form-control " type="text" id="apellido" name="apellido">
                @error('descripcion')
                    <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                @enderror
            </div>
            <div class="cont-inputs">
                <label for="">Email:</label>
                <input class="form-control" type="email" id="email" name="email">
                @error('referencia')
                    <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                @enderror
            </div>
            <div class="cont-inputs">
                <label for="">Telefono:</label>
                <input class="form-control" type="number" id="telefono" name="telefono">
                @error('precio')
                    <div class="alert alert-danger mt-2 p-1">{{$message}}</div>
                @enderror
            </div>
            <input class="btn btn-primary mt-2" type="submit" value="Guardar">
        </form>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>