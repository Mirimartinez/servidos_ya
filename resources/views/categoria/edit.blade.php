<h1>Formulario de edicion de categoria</h1>
<br>
<form action="{{ route('categoria.update',$categoria->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('categoria.form')
</form>

