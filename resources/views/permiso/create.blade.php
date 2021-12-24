<h1>Formulario de permiso</h1>
<br>
<form action="{{ route('permiso.store') }}" method="post">
    @csrf
    @include('permiso.form')
</form>

