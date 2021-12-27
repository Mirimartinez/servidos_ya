@include('layouts.app')
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
