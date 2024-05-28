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

        <form action="{{ route('crud.store') }}" method="POST">

            @csrf

            <label>
                Ingresa tu nombre:
                <input type="text" name="nombre">
            </label>
            <br>
            <br>
            <label>
                Ingresa tu dni:
                <input type="text" name="dni">
            </label>
            <br>
            <br>
            <label>
                Ingresa tu numero de telefono:
                <input type="text" name="telefono">
            </label>
            <br>
            <br>
            <label>
                Ingresa tu direccion:
                <input type="text" name="direccion">
            </label>

            <br>
            <br>
            <button type="submit">Enviar</button>

        </form>
    </div>
</body>

</html>
