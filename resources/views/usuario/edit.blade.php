<h1>Formulario de edicion de usuarios</h1>
<br>
<form action="{{ route('usuario.update',$usuario->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('usuario.form')
</form>

