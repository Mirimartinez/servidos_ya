<h1>Mostrar Cajas</h1>
<br>
<table style="border-style: solid">
    <thead>
    <tr>
        <th>ID</th>

        <th>Importe Total</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    @foreach($cajas as $caja)
        <tr>
            <td>{{ $caja->id }}</td>


            <td>{{ $caja->ImporteTotal}}</td>
            <td>
                <a href="{{ route('caja.edit',$caja->id) }}">Editar</a>
                |
                <form action="{{ route('caja.destroy',$caja->id) }}" method="post">
                    @csrf
                    {{ method_field('DELETE') }}
                    <button type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
