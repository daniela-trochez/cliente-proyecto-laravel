<h1>Registro de proyectos</h1>
<a href="{{route('proyectos.create')}}">crear proyecto</a>
<br>
<ul>
    
    
        @foreach ($proyectos as $proyecto)
            <li>
                <a href="{{route('proyectos.show',$proyecto)}}">{{$proyecto->name}}</a>
            </li>
        @endforeach
   
</ul>