<h1>Mostrar Permisos</h1>
<br>
<table style="border-style: solid">
    <thead>
    <tr>
        <th>ID</th>


        <th>Rol</th>
        <th>Proceso</th>

        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($permisos as $permiso)
        <tr>
            <td>{{ $permiso->id }}</td>
            <td>{{ $permiso->idrol }}</td>
            <td>{{ $permiso->proceso }}</td>
            <td>
                <a href="{{ route('permiso.edit',$permiso->id) }}">Editar</a>
                |
                <form action="{{ route('permiso.destroy',$permiso->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
