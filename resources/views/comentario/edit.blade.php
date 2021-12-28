@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('comentario.index')}}"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Formulario de edición de productos</h1>
        </div>
<form action="{{ route('comentario.update',$comentario->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('comentario.form')
</form>
    </div>
</div>
@include('includes.footer')

