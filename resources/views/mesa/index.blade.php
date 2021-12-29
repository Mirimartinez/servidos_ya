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
        <a href="{{ url('/mesa/atender/'.$mesa->id) }}" class="stretched-link" ></a>
        </div>
    </div>
@endforeach
    </div>
        </div>
    </div>
</div>
@include('includes.footer')
