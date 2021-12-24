<h1>Mostrar la lista de productos</h1>
<br>
<table style="border-style: solid">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Password</th>
            <th>Rol</th>
            <th>Activo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr>
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
            <td>{{ $usuario->password }}</td>
            <td>{{ $usuario->idrol }}</td>
            <td>{{ $usuario->activo }}</td>
            <td>
                <a href="{{ route('usuario.edit',$usuario->id) }}">Editar</a>
                 |
                <form action="{{ route('usuario.destroy',$usuario->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

