<h1>Formulario de edicion de productos</h1>
<br>
<form action="{{ route('comentario.update',$comentario->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('comentario.form')
</form>

