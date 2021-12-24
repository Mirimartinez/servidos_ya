<h1>Mostrar la lista de productos</h1>
<br>
<table style="border-style: solid">
    <thead>
        <tr>
            <th>ID</th>
            <th>Fecha</th>
            <th>Hora inicio</th>
            <th>Hora fin</th>
            <th>Nro. Mesa</th>
            <th>Usuario</th>
            <th>Importe total</th>
            <th>Pagado</th>
        </tr>
    </thead>
    <tbody>
        @foreach($comandas as $comanda)
        <tr>
            <td>{{ $comanda->id }}</td>
            <td>{{ $comanda->fecha }}</td>
            <td>{{ $comanda->horainicio }}</td>
            <td>{{ $comanda->horafin }}</td>
            <td>{{ $comanda->idmesa }}</td>
            <td>{{ $comanda->idusuario }}</td>
            <td>{{ $comanda->importetotal }}</td>
            <td>{{ $comanda->pagado }}</td>
            <td>
                <a href="{{ route('comanda.edit',$comanda->id) }}">Editar</a>
                 |
                <form action="{{ route('comanda.destroy',$comanda->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

