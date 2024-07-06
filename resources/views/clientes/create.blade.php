<h1>Crear Cliente</h1>
<form action="{{route('clientes.store')}}" method="POST">
    @csrf
    <div>
        <label >Nombre:
            <input type="text" name="name" id="">
        </label>
    </div>
    <div>
        <label >Numero Social:
            <input type="text" name="numeroSocial" id="">
        </label>
    </div>
    <div>
        <label >Telefono:
            <input type="text" name="telefono" id="">
        </label>
    </div>
    <div>
        <label >Domicilio:
            <input type="text" name="domicilio" id="">
        </label>
    </div>

    <button>Guardar</button>

</form>
<a href="{{route('clientes.index')}}">Volver</a>
