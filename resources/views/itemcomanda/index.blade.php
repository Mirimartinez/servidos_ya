<h1>Mostrar la lista de productos</h1>
<br>
<table style="border-style: solid">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nro. Comanda</th>
            <th>Nro. Producto</th>
            <th>Precio</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        @foreach($itemcomandas as $itemcomanda)
        <tr>
            <td>{{ $itemcomanda->id }}</td>
            <td>{{ $itemcomanda->idcomanda }}</td>
            <td>{{ $itemcomanda->idproducto }}</td>
            <td>{{ $itemcomanda->precio }}</td>
            <td>
                <a href="{{ route('itemcomanda.edit',$itemcomanda->id) }}">Editar</a>
                 |
                <form action="{{ route('itemcomanda.destroy',$itemcomanda->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

