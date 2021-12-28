@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="http://localhost/proyecto_curso_utn/servidos_ya/public/producto"><i class="fas fa-arrow-left h2"></i></a>
</div>
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

@include('includes.footer')
