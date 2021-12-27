@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de creación de roles</h1>
        </div>
<form action="{{ route('rol.store') }}" method="post">
    @csrf
    @include('rol.form')
</form>
    </div>
</div>
@include('includes.footer')
