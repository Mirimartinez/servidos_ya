<h1>Formulario de edicion de comanda</h1>
<br>
<form action="{{ route('comanda.update',$comanda->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('comanda.form')
</form>

