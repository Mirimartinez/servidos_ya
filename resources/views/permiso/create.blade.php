@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('permiso.index')}}"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
            <h1 class="text-uppercase">Crear permiso</h1>
        </div>
<form action="{{ route('permiso.store') }}" method="post">
    @csrf
    @include('permiso.form')
</form>
    </div>
</div>
@include('includes.footer')
