<h1>Mostrar la lista de productos</h1>
<br>
<table style="border-style: solid">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>

        </tr>
    </thead>
    <tbody>
        @foreach($rols as $rol)
        <tr>
            <td>{{ $rol->id }}</td>
            <td>{{ $rol->nombre }}</td>

            <td>
                <a href="{{ route('rol.edit',$rol->id) }}">Editar</a>
                 |
                <form action="{{ route('rol.destroy',$rol->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

