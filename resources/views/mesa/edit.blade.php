@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="http://localhost/proyecto_curso_utn/servidos_ya/public/mesa"><i class="fas fa-arrow-left h2"></i></a>
</div>
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
@include('includes.footer')
