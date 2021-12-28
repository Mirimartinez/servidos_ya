@include('layouts.app')
<div class="d-inline-flex ms-4">
    <a href="{{route('mesa.index')}}"><i class="fas fa-arrow-left h2"></i></a>
</div>
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<h1>PAGAR MESA N° {{$mesa->id}}</h1>
        </div>
    </div>
</div>
@include('includes.footer')
