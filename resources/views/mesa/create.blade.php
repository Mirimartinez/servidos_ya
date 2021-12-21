@extends('layouts.app')

@section('content')

<h1 class="h1">Formulario de creacion de mesas</h1>
<br>
<form class="form-control" action="{{ route('mesa.store') }}" method="post">
    @csrf
    @include('mesa.form')
</form>

@endsection

