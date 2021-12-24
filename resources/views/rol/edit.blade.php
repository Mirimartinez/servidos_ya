<h1>Formulario de edicion de roles</h1>
<br>
<form action="{{ route('rol.update',$rol->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('rol.form')
</form>

