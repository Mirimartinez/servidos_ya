@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de edición de usuarios</h1>
        </div>
<form action="{{ route('usuario.update',$usuario->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('usuario.form')
</form>
    </div>
</div>
