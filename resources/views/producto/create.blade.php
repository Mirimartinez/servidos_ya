<h1>Formulario de creacion de producto</h1>
<br>
<form action="{{ route('producto.store') }}" method="post">
    @csrf
    @include('producto.form')
</form>
