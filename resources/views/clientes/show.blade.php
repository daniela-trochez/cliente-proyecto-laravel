<h1>Detalles del Cliente</h1>

<p><strong>id: </strong>{{$cliente->id}}</p>
<p><strong>Nombre: </strong>{{$cliente->name}}</p>
<p><strong>Numero Social: </strong>{{$cliente->numeroSocial}}</p>
<p><strong>Telefono: </strong>{{$cliente->telefono}}</p>
<p><strong>Domicilio: </strong>{{$cliente->domicilio}}</p>

<a href="{{route('clientes.edit',$cliente)}}">Editar</a>

<form action="{{route('clientes.destroy',$cliente)}}" method="POST">
    @csrf
    @method('DELETE')
    <button>Eliminar</button>
</form>
