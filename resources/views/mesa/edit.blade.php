@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1>Formulario de edicion de productos</h1>
        </div>
<form action="{{ route('producto.update',$producto->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('producto.form')
</form>
    </div>
</div>
