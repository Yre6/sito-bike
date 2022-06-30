@extends('layouts.app')

@section('content')
<div id="homepage-main" class="d-flex">
    <div class="col-6 d-flex justify-content-center">
        <div class="w-50 m-auto d-flex flex-column justify-content-center">
            <h1 class="mb-3">Araig <br> Mountain Bike</h1>
            <h5 class="fw-normal mb-5">
            Amore per la montagna, passione per le due ruote.
            </h5>

            <div class="arrow-button position-relative">
                <button>
                    <a href="{{route('sections')}}">SCOPRI DI PI&Ugrave;</a>
                </button>   
                <img class="position-absolute " src="{{asset('img/arrow.png')}}" alt="">
            </div>
        </div>
       
    </div>
    <div class="col-6">
        <img class="w-100 h-100" src="{{asset('img/jumbo.jpg')}}" alt="">
    </div>

</div>
@endsection