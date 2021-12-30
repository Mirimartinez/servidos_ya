@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('mesa.index')}}"><i class="fas fa-arrow-left h2"></i></a>
    <a class="ms-3" href="{{route('usuario.create')}}"><i class="fas fa-plus h2"></i></a>
</div>
<div class="container container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Usuarios</h1>
        </div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
{{--            <th>Password</th>--}}
            <th>Rol</th>
            <th>Activo</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($usuarios as $usuario)
        <tr class="align-text-bottom">
            <td>{{ $usuario->id }}</td>
            <td>{{ $usuario->nombre }}</td>
{{--            <td>{{ $usuario->password }}</td>--}}
            <td>{{ $usuario->rol->nombre }}</td>
            <td>
                @if ($usuario->activo == true) Si
                @else No
                @endif
            </td>
            <td class="btn-group">
                <a class="btn btn-primary rounded-3 mx-1 border-end border-bottom pt-2" href="{{ route('usuario.edit',$usuario->id) }}">Editar</a>

                <form action="{{ route('usuario.destroy',$usuario->id) }}" method="post">
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
