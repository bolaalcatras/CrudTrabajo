<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <div>
        <h1>Ingresa nuevos datos</h1>

        <form action="{{ route('crud.update', $datos->id) }}" method="POST">

            @csrf

            @method('PUT')

            <label>
                Ingresa tu nombre:
                <input type="text" name="nombre" value="{{$datos->nombre}}">
            </label>
            <br>
            <br>
            <label>
                Ingresa tu dni:
                <input type="text" name="dni" value="{{$datos->dni}}">
            </label>
            <br>
            <br>
            <label>
                Ingresa tu numero de telefono:
                <input type="text" name="telefono" value="{{$datos->telefono}}">
            </label>
            <br>
            <br>
            <label>
                Ingresa tu direccion:
                <input type="text" name="direccion" value="{{$datos->direccion}}">
            </label>

            <br>
            <br>
            <button type="submit">Actualizar informacion</button>

        </form>
    </div>
</body>

</html>
