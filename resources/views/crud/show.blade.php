<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<a href="http://localhost/Trabajo/public/index">Atras</a>

<body>
    <h1>Nombre: {{ $datos->nombre }} </h1>
    <h1>Dni: {{ $datos->dni }} </h1>
    <h1>Telefono: {{ $datos->telefono }} </h1>
    <h1>Direccion: {{ $datos->direccion }} </h1>

    <a href="{{route('crud.edit' , $datos->id)}}">Editar</a>

    <form action="{{route('crud.destroy', $datos->id)}}" method="POST">

      @csrf

      @method('DELETE')

      <button type="submit">
        Eliminar datos
      </button>

    </form>
    
</body>

</html>
