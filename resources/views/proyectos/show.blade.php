<h1>Detalles</h1>

<p><strong>id: </strong> {{$proyecto->id}}</p>
<p><strong>Nombre: </strong> {{$proyecto->name}}</p>
<p><strong>Descripción: </strong> {{$proyecto->descripcio}}</p>
<p><strong>Cuantia: </strong> {{$proyecto->cuantia}}</p>
<p><strong>Fecha Inicio: </strong> {{$proyecto->fechaInicio}}</p>
<p><strong>Fecha Fin: </strong> {{$proyecto->fechaFin}}</p>
<p><strong>Cliente: </strong> {{$proyecto->cliente->name}}</p>

<br>
<a href="{{route('proyectos.edit',$proyecto)}}">Editar</a> <br><br>
<form action="{{route('proyectos.destroy',$proyecto)}}" method="POST">
    @csrf
    @method('DELETE')

    <button style="">Eliminar</button>
</form>
<br>
<a href="{{route('proyectos.index')}}">ir al inicio</a>

