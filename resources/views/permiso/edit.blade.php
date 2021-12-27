@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase">Editar permiso</h1>
        </div>
<form action="{{ route('permiso.update',$permiso->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('permiso.form')
</form>
    </div>
</div>
