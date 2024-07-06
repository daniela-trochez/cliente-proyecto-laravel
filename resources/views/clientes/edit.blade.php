<h1>Editar Cliente</h1>
<form action="{{route('clientes.update',$cliente)}}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label >Nombre:
            <input type="text" name="name" id="" value="{{$cliente->name}}">
        </label>
    </div>
    <div>
        <label >Numero Social:
            <input type="text" name="numeroSocial" id="" value="{{$cliente->numeroSocial}}">
        </label>
    </div>
    <div>
        <label >Telefono:
            <input type="text" name="telefono" id="" value="{{$cliente->telefono}}">
        </label>
    </div>
    <div>
        <label >Domicilio:
            <input type="text" name="domicilio" id="" value="{{$cliente->domicilio}}">
        </label>
    </div>

    <button>Actualizar</button>

</form>
<a href="{{route('clientes.index')}}">volver</a>
