@extends('layouts.app')

@section('content')

<h1>Mostrar la lista de productos</h1>
<br>
<table class="table table-dark">
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
        <tr>
            <td>{{ $producto->id }}</td>
            <td>{{ $producto->nombre }}</td>
            <td>{{ $producto->descripcion }}</td>
            <td>{{ $producto->tipo }}</td>
            <td>{{ $producto->precio }}</td>
            <td>
                <a href="{{ route('producto.edit',$producto->id) }}">Editar</a>
                 |
                <form action="{{ route('producto.destroy',$producto->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
