<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<h1>Listar Colaborador</h1>

<table>
    <thead>
        <tr>
            <th>nombre</th>
            <th>nif</th>
          
          
        </tr>
    </thead>
    <tbody>
        @foreach ($colaborador as $colaborador)
        <tr>
            <td>{{$colaborador->nombre}}</td>
            <td>{{$colaborador->nif}}</td>
            
          
            <td>
                <a href="{{route('colaborador.show',$colaborador->id)}}">Detalle</a>
                <a href="{{route('colaborador.edit',$colaborador->id)}}">Editar</a>
                <form action="{{route('colaborador.destroy',$colaborador->id)}}" method="POST">
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