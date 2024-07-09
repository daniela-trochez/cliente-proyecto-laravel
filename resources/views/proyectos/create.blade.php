<h1>Crear proyecto</h1>

<form action="{{route('proyectos.store')}}" method="POST">
    @csrf
    
    <div>
        <label>Nombre: 
            <input type="text" name="name">
        </label>
    </div>
    <div>
        <label>Descripción: 
            <input type="text" name="descripcion">
        </label>
    </div>
    <div>
        <label>Cuantia: 
            <input type="number" name="cuantia">
        </label>
    </div>
    <div>
        <label>Fecha de Inicio: 
            <input type="date" name="fechaInicio">
        </label>
    </div>
    <div>
        <label>Fecha de Finalización: 
            <input type="date" name="fechaFin">
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
    <button>Enviar</button>

</form><br>
<a href="{{route('proyectos.index')}}">Ir al inicio</a>
