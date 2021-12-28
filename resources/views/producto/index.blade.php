@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="http://localhost/proyecto_curso_utn/servidos_ya/public/mesa"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1>Mostrar la lista de productos</h1>
        </div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($productos as $producto)
        <tr class="align-text-bottom">
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->tipo }}</td>
            <td>{{ $producto->precio }}</td>
            <td class="btn-group">
                <a class="btn btn-primary rounded-3 mx-1 border-end border-bottom pt-2" href="{{ route('producto.edit',$producto->id) }}">Editar</a>

                <form action="{{ route('producto.destroy',$producto->id) }}" method="post">
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

