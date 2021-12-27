@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de creación de producto</h1>
        </div>
<form action="{{ route('itemcomanda.store') }}" method="post">
    @csrf
    @include('itemcomanda.form')
</form>
    </div>
</div>
@include('includes.footer')

