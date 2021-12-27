@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Mostrar Permisos</h1>
        </div>
<table class="table table-bordered">
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
            <td class="btn-group">
                <a class="btn btn-primary rounded-3 mx-1 border-end border-bottom pt-2" href="{{ route('permiso.edit',$permiso->id) }}">Editar</a>

                <form action="{{ route('permiso.destroy',$permiso->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button class="btn-danger rounded-3 mx-1 p-2" type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
    </div>
</div>
