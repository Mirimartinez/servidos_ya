@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de edición de categoria</h1>
        </div>
<form action="{{ route('categoria.update',$categoria->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('categoria.form')
</form>
    </div>
</div>
@include('includes.footer')
