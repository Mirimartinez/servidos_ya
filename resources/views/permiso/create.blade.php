<h1>Formulario cierre de caja</h1>
<br>
<form action="{{ route('caja.store') }}" method="post">
    @csrf
    @include('caja.form')
</form>

