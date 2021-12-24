<h1>Formulario de creacion de roles</h1>
<br>
<form action="{{ route('rol.store') }}" method="post">
    @csrf
    @include('rol.form')
</form>

