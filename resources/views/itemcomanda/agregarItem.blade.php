@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{url()->previous()}}"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Agregar producto a la comanda</h1>
        </div>
        <form method="post" action="/servidos_ya/public/itemcomanda/guardarItem/{{$comanda->id}}/" onsubmit="location.href = this.action + this.comboProducto.value; return false;">
    @csrf
    <div>
        <label>Nro. Comanda: </label>
        <input class="form-control m-2 text-center" type="text" name="idcomanda" id="idcomanda" value="{{ $comanda->id ?? '' }}" readonly>
    </div>
    <div>
        <label>Producto: </label>
{{--        <input class="form-control m-2 text-center" type="text" name="idproducto" id="idproducto" value="{{ $idproducto ?? '' }}">--}}
        <select class="form-select m-2 text-center"  name="producto" id="comboProducto">
            <option selected>Seleccione un producto</option>
            @foreach($productos as $producto)
                <option value="{{$producto->id ?? ''}}">{{$producto->nombre ?? '' }}</option>
            @endforeach
        </select>
    </div>
    <button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>

</form>
    </div>
</div>
@include('includes.footer')

