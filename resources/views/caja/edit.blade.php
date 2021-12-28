@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="http://localhost/proyecto_curso_utn/servidos_ya/public/caja"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Editar caja</h1>
        </div>
<form action="{{ route('caja.update',$caja->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('caja.form')
</form>
    </div>
</div>
@include('includes.footer')
