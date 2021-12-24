<h1>Formulario de edicion de productos</h1>
<br>
<form action="{{ route('itemcomanda.update',$itemcomanda->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('itemcomanda.form')
</form>

