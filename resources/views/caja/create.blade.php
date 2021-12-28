@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('caja.index')}}"><i class="fas fa-arrow-left h2"></i></a>
    <a class="ms-3" href="{{route('caja.create')}}"><i class="fas fa-plus h2"></i></a>

</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario cierre de caja</h1>
        </div>
            <form action="{{ route('caja.store') }}" method="post">
    @csrf
    @include('caja.form')
</form>
    </div>
</div>
@include('includes.footer')
