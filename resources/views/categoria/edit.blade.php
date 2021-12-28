@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('categoria.index')}}"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1 class="text-uppercase">Editar categorías</h1>
        </div>
<form action="{{ route('categoria.update',$categoria->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('categoria.form')
</form>
    </div>
</div>
@include('includes.footer')
