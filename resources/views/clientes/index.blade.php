<h1>Registro de Clientes</h1>

<ul>
    @foreach ($clientes as $cliente )

        <li><a href="{{route('clientes.show',$cliente)}}">{{$cliente->name}}</a></li>

    @endforeach
</ul>
