@extends('layouts.app')

@section('content')

<h1>Formulario de edicion de productos</h1>
<br>
<form action="{{ route('producto.update',$producto->id) }}" method="post">
    @csrf
    {{ method_field('PATCH') }}
    @include('producto.form')
</form>
@endsection

