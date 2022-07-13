@extends('layouts.app')

@section('content')

<div id="prova" class="container-valleys w-100">
    <div class="w-75 h-100 m-auto d-flex">
        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
            
        <div id="map" class="map w-100 h-100 overflow-hidden">
            
        </div>



        </div>
        <div class="col-6 d-flex flex-column justify-content-around align-items-center">
            <h1>
                Scopri i percorsi
            </h1>
            <div class="container-card-valley d-flex flex-wrap">
                @foreach ($valleys as $valley)
                   
                    <div id="{{$valley->slug}}" class="card card-valley">
                        <a class="h-100 w-100 d-flex flex-column justify-content-around align-items-center" href="{{route('guest.index', $valley->slug)}}">
                            <h3>{{$valley->name}}</h3>
                        
                        <h6>{{$valley->tours->count()}} Percorsi </h6>
                        </a>
                        

                    </div>
                @endforeach

            </div>
        </div>

    </div>

</div>


@endsection
