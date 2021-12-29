@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{ route('mesa.index') }}"><i class="fas fa-arrow-left h2"></i></a>
    <a class="ms-3" href="{{url("/itemcomanda/agregarItem/" . App\Models\Comanda::comandaActivaDeMesa($mesa->id)->id )}}"><i class="fas fa-plus h2"></i></a>
</div>

<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase">MESA N° {{$mesa->id}} - COMANDA N° {{App\Models\Comanda::comandaActivaDeMesa($mesa->id)->id}}</h1>
        </div>

        <table class="table table-bordered">
            <thead>
            <tr>
                <th>N°</th>
                <th>Producto</th>
                <th>Precio</th>
                <th>Acciones</th>
            </tr>
            </thead>
            <tbody>
            @foreach(App\Models\Itemcomanda::listaItems(App\Models\Comanda::comandaActivaDeMesa($mesa->id)->id) as $item)
                <tr class="align-text-bottom">
                    <td>{{$item->id}}</td>
                    <td>{{$item->producto->nombre}}</td>
                    <td>{{$item->precio}}</td>
                    <td class="btn-group">
                        <a class="btn btn-primary rounded-3 ms-1 me-2 border-end border-bottom pt-2 " style="width: 4rem;" href="{{ route('itemcomanda.edit',$item->id) }}">Editar</a>

                        <form action="{{ route('itemcomanda.destroy',$item->id) }}" method="post">
                            @csrf
                            {{ method_field('DELETE') }}
                            <button class="btn-danger rounded-3 mx-1 p-2" style="width: 4rem;" type="submit" onclick="return confirm('¿Quieres borrar?')">Borrar</button>
                            <button class="btn-success rounded-3 mx-1 p-2" style="width: 4rem;" type="submit" onclick="return confirm('¿Quieres pagar?')">Pagar</button>

                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>

@include('includes.footer')
