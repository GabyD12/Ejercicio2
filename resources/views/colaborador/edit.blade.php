<h1>Actualizar Colaborador</h1>
<form action="{{route('colaborador.update', $colaborador)}}"  method="POST">

    @csrf
    @method('put')
    <label>
    Nombre
    <br>
    <input name="nombre" type="text" value="{{old('nombre',$colaborador->nombre) }}">
    <br>
    </label>
   
    <label>
    Nif
    <br>
     <input name="nif" type="text" value="{{old('nif',$colaborador->nif) }}">
     <br>
     </label>
    

        
    <br>
   
    <button  type="submit">Actualizar Cliente</button>
   
</form>