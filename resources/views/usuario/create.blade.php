@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de creación de usuarios</h1>
        </div>
<form action="{{ route('usuario.store') }}" method="post">
    @csrf
    @include('usuario.form')
</form>
    </div>
</div>
@include('includes.footer')
