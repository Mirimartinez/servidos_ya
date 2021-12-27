@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">

    <h1 class="text-uppercase">Formulario de creación de producto</h1>
</div>
<form class="" action="{{ route('producto.store') }}" method="post">
    @csrf
    @include('producto.form')
</form>
    </div>
</div>
