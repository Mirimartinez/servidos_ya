@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{url()->previous()}}"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container container-fluid text-center">
    <div class="row">
        <div class="col">

    <h1 class="text-uppercase">Crear producto</h1>
</div>
<form class="" action="{{ route('producto.store') }}" method="post">
    @csrf
    @include('producto.form')
</form>
    </div>
</div>

@include('includes.footer')
