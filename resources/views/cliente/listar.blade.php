<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Listar Cliente</h1>

<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>telefono</th>
            <th>domicilio</th>
            <th>num_social</th>
          
        </tr>
    </thead>
    <tbody>
        @foreach ($cliente as $cliente)
        <tr>
            <td>{{$cliente->nombre}}</td>
            <td>{{$cliente->telefono}}</td>
            <td>{{$cliente->domicilio}}</td>
            <td>{{$cliente->num_social}}</td>
          
            <td>
                <a href="{{route('cliente.show',$cliente->id)}}">Detalle</a>
                <a href="{{route('cliente.edit',$cliente->id)}}">Editar</a>
                <form action="{{route('cliente.destroy',$cliente->id)}}" method="POST">
                    @csrf
                    @method('delete')
                    <button type="submit">Eliminar</button>
                </form>
               
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
   
</body>
</html>
