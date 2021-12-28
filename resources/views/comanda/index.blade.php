@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('mesa.index')}}"><i class="fas fa-arrow-left h2"></i></a>
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
        <tr class="align-text-bottom">
            <td>{{ $comanda->id }}</td>
            <td>{{ $comanda->fecha }}</td>
            <td>{{ $comanda->horainicio }}</td>
            <td>{{ $comanda->horafin }}</td>
            <td>{{ $comanda->idmesa }}</td>
            <td>{{ $comanda->idusuario }}</td>
            <td>{{ $comanda->importetotal }}</td>
            <td>{{ $comanda->pagado }}</td>
            <td class="btn-group">
                <a class="btn btn-primary rounded-3 mx-1 border-end border-bottom pt-2" href="{{ route('comanda.edit',$comanda->id) }}">Editar</a>

                <form action="{{ route('comanda.destroy',$comanda->id) }}" method="post">
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
