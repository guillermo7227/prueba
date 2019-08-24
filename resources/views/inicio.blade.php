<h1>Hola</h1>

<ul>
    @foreach ($usuarios as $usuario)
        <li>{{ $usuario->name }}</li>
    @endforeach
</ul>

