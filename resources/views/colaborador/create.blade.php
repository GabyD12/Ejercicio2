<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Colaborador</h1>

    <form action="{{route('colaborador.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
           Nombre
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
           Nif
            <br>
            <input type="text" name="nif">
        </label>
       
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       




</body>
</html>