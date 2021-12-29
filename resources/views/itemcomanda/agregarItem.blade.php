@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{url()->previous()}}"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Agregar producto a la comanda</h1>
        </div>
        <form action="{{ url("/itemcomanda/guardarItem/" . $comanda->id . "/" . ($idproducto ?? '1'). "/" . ($precio ?? '1')) }}" method="post">
{{--            <form action="{{ url("/itemcomanda/guardarItem/" . $comanda->id . "/1/1") }}" method="post">--}}
    @csrf
    <div>
        <label>Nro. Comanda: </label>
        <input class="form-control m-2 text-center" type="text" name="idcomanda" id="idcomanda" value="{{ $comanda->id ?? '' }}" readonly>
    </div>
    <div>
        <label>Producto: </label>
{{--        <input class="form-control m-2 text-center" type="text" name="idproducto" id="idproducto" value="{{ $idproducto ?? '' }}">--}}
        <select class="form-select m-2 text-center"  name="producto" id="comboProducto" onchange="setValor()">
            <option selected>Seleccione un producto</option>
            @foreach($productos as $producto)
                <option value="{{$producto->id ?? ''}}">{{$producto->precio . $producto->nombre ?? '' }}</option>
            @endforeach
        </select>
    </div>
    <div>
        <label>Precio: </label>
        <input class="form-control m-2 text-center" type="text" name="precio" id="precio" value="">
    </div>
    <button class="btn-primary rounded-3 m-2" type="submit">Guardar</button>

</form>
    </div>
</div>
@include('includes.footer')

<script>
    function setValor() {
        {{--precio = {!! json_decode($producto->precioProducto($producto->id)->precio) !!};
        id = {!! json_decode($producto->precio) !!};
        alert(id);--}}
        id=document.getElementById('comboProducto').value;
        document.getElementById('precio').value=id;
    }
</script>
