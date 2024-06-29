<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Cliente</h1>

    <form action="{{route('cliente.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
       
        <label>
           Nombre
            <br>
            <input type="text" name="nombre">
        </label>
        <br>
        <label>
           Telefono
            <br>
            <input type="text" name="telefono">
        </label>
       
        <br>
        <label>
         Domicilio
            <br>
            <input type="text" name="domicilio">
        </label>

        <br>
        <label>
            Num Social
               <br>
               <input type="text" name="num_social">
           </label>
        <br><br>
        <button type="submit">Enviar Formulario:</button>
        </form>
       




</body>
</html>