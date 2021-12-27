@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de creación de comanda</h1>
        </div>
<form action="{{ route('comanda.store') }}" method="post">
    @csrf
    @include('comanda.form')
</form>
        </div>
    </div>
@include('includes.footer')
