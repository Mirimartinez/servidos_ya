@extends('layouts.app')

@section('content')
<div class="row justify-content-start gap-2 ms-5">
@foreach($mesas as $mesa)

    <div class="card bg-color1 shadow card-size">
        <div class="card-body p-1">
            <h5 class="card-title text-color2 h3">Mesa N° {{$mesa->id}}</h5>

            <h6 class="card-subtitle mb-2 text-color3 h5">
                @if($mesa->estado == 0)
                    {{$estadomesa = 'libre'}}
                @else
                    {{$estadomesa = 'ocupada'}}
                @endif
            </h6>
            <h6 class="text-light text-center h4 mb-3"><i class="fas fa-dollar-sign"></i>9999</h6>
            <!--<div class="d-flex justify-content-center">-->
            <div class="btn-group w-100">
                <button class="btn button2 w-50"><i class="h3 fas fa-check mb-0" onclick="mesa()"></i></button>
                <button class="btn button2 w-50"><i class="h4 fas fa-cash-register mb-0" onclick="cobrar()"></i></button>
            </div>

        </div>
    </div>


@endforeach
</div>

@endsection
