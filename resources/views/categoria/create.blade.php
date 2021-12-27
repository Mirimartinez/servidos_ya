@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de creación de categoría</h1>
        </div>
<form action="{{ route('categoria.store') }}" method="post">
    @csrf
    @include('categoria.form')
</form>
    </div>
</div>
