<h1>Formulario de creacion de usuarios</h1>
<br>
<form action="{{ route('usuario.store') }}" method="post">
    @csrf
    @include('usuario.form')
</form>

