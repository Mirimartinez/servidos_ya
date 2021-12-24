<h1>Editar permiso</h1>
<br>
<form action="{{ route('permiso.update',$permiso->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('permiso.form')
</form>
