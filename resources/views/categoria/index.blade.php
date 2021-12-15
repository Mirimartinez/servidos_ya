<h1>Mostrar la lista de categorias</h1>
<br>
<table style="border-style: solid">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categorias as $categoria)
        <tr>
            <td>{{ $categoria->id }}</td>
            <td>{{ $categoria->nombre }}</td>
            <td>
                <a href="{{ route('categoria.edit',$categoria->id) }}">Editar</a>
                 |
                <form action="{{ route('categoria.destroy',$categoria->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

