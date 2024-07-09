<h1>Editar proyecto</h1>

<form action="{{ route('proyectos.update', $proyecto) }}" method="POST">
    @csrf
    @method('PUT')
    <div>
        <label>Nombre:
            <input type="text" name="name" value="{{ $proyecto->name }}">
        </label>
    </div>
    <div>
        <label>Descripción:
            <input type="text" name="descripcion" value="{{ $proyecto->descripcion }}">
        </label>
    </div>
    <div>
        <label>Cuantia:
            <input type="number" name="cuantia" value="{{ $proyecto->cuantia }}">
        </label>
    </div>
    <div>
        <label>Fecha de Inicio:
            <input type="date" name="fechaInicio" value="{{ $proyecto->fechaInicio }}">
        </label>
    </div>
    <div>
        <label>Fecha de Finalización:
            <input type="date" name="fechaFin" value="{{ $proyecto->fechaFin }}">
        </label>
    </div>

    <div>
        <label for="cliente"> Cliente: </label>
        <select name="cliente_id" id="cliente">
            <option value="">Elegir opcion</option>
            @foreach ($clientes as $cliente)
                <option value="{{ $cliente->id }}">{{ $cliente->name }}</option>
            @endforeach

        </select>
    </div>
    <br>
    <button>Actualizar</button>

</form><br>
<a href="{{ route('proyectos.index') }}">Ir al inicio</a>
