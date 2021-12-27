@include('layouts.app')
<div class="container-fluid text-center">
    <div class="row">
        <div class="col">
<div class="row justify-content-around gap-3 mx-1 mb-5">
@foreach($mesas as $mesa)

    <div class="card bg-color1 shadow card-size">
        <div class="card-body p-1">
            <h5 class="card-title text-color2 h3">Mesa N° {{$mesa->id}}</h5>

            <h6 class="card-subtitle mb-2 text-color3 h5">
                {{ $mesa->estadoMesa() }}
            </h6>
            <h6 class="text-light text-center h4 mb-3"><i class="fas fa-dollar-sign"></i>{{$mesa->totalMesa()}}</h6>
            <!--<div class="d-flex justify-content-center">-->
            <div class="btn-group w-100">
                <button class="btn button2 w-50"><i class="h3 fas fa-check mb-0" onclick="window.location='{{ url("/mesa/atender/" . $mesa->id)}}'"></i></button>
                <button class="btn button2 w-50"><i class="h4 fas fa-cash-register mb-0" onclick="window.location='{{ url("/mesa/pagar/" . $mesa->id)}}'"></i></button>
            </div>

        </div>
    </div>
@endforeach
    </div>
        </div>
    </div>
</div>
@include('includes.footer')
