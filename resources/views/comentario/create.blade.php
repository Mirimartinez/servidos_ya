<h1>Formulario de creacion de producto</h1>
<br>
<form action="{{ route('comentario.store') }}" method="post">
    @csrf
    @include('comentario.form')
</form>

