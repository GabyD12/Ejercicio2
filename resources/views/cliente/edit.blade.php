<h1>Actualizar Cliente</h1>
<form action="{{route('cliente.update', $cliente)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Nombre
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$cliente->nombre) }}">
    <br>
    </label>
   
    <label>
    Telefono
    <br>
     <input name="telefono" type="text" value="{{old('telefono',$cliente->telefono) }}">
     <br>
     </label>
    
    <label>
    Domicilio
    <br>
    <input name="domicilio" type="text" value="{{old('domicilio',$cliente->domicilio)}}">
    <br>
    </label>
   
    <br>
    <label>
    Num Social
    <br>
    <input name="num_social" type="text" value="{{old('num_social',$cliente->num_social)}}">
    <br>
    </label>
       
        
    <br>
   
    <button  type="submit">Actualizar Cliente</button>
   
</form>