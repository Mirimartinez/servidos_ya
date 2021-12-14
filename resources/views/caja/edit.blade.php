<h1>Editar caja</h1>
<br>
<form action="{{ route('caja.update',$caja->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('caja.form')
</form>
