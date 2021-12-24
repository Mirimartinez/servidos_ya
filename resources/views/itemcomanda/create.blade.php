<h1>Formulario de creacion de producto</h1>
<br>
<form action="{{ route('itemcomanda.store') }}" method="post">
    @csrf
    @include('itemcomanda.form')
</form>

