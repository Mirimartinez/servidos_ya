<h1>Formulario de creacion de comanda</h1>
<br>
<form action="{{ route('comanda.store') }}" method="post">
    @csrf
    @include('comanda.form')
</form>

