@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('usuario.index')}}"><i class="fas fa-arrow-left h2"></i></a>
    <a class="ms-3" href="{{route('usuario.create')}}"><i class="fas fa-plus h2"></i></a>

</div>
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
