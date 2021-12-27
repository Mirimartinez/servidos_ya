@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase">Formulario de permiso</h1>
        </div>
<form action="{{ route('permiso.store') }}" method="post">
    @csrf
    @include('permiso.form')
</form>
    </div>
</div>
