<h1>Formulario de creacion de categoria</h1>
<br>
<form action="{{ route('categoria.store') }}" method="post">
    @csrf
    @include('categoria.form')
</form>

