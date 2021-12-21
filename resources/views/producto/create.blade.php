@extends('layouts.app')

@section('content')


<br>
<div class="col-5 mx-3">
    <h1>Formulario de creacion de producto</h1>
<form class="" action="{{ route('producto.store') }}" method="post">
    @csrf
    @include('producto.form')
</form>
</div>
@endsection
