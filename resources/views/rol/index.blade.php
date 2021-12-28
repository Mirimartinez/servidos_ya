@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="http://localhost/proyecto_curso_utn/servidos_ya/public/mesa"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Mostrar la lista de productos</h1>
        </div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
        </tr>
    </thead>
    <tbody>
        @foreach($rols as $rol)
        <tr class="align-text-bottom">
            <td>{{ $rol->id }}</td>
            <td>{{ $rol->nombre }}</td>
            <td class="btn-group">
                <a class="btn btn-primary rounded-3 mx-1 border-end border-bottom pt-2"href="{{ route('rol.edit',$rol->id) }}">Editar</a>

                <form action="{{ route('rol.destroy',$rol->id) }}" method="post">
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
@include('includes.footer')
