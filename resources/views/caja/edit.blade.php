@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Editar caja</h1>
        </div>
<form action="{{ route('caja.update',$caja->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('caja.form')
</form>
    </div>
</div>
@include('includes.footer')
