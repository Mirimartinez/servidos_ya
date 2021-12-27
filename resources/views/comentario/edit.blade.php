@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de edición de productos</h1>
        </div>
<form action="{{ route('comentario.update',$comentario->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('comentario.form')
</form>
    </div>
</div>
