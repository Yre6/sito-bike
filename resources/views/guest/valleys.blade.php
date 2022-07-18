@extends('layouts.app')

@section('content')

<div class="container-valleys w-75 m-auto d-flex">
    
        <div id="map" class="col-6 h-100">
            
        </div>

        <div class="col-6 d-flex flex-column justify-content-around align-items-center px-4">
            <h1>
                Scopri i percorsi
            </h1>
            <div class="container-card-valley d-flex flex-wrap justify-content-around">
                @foreach ($valleys as $valley)
                   
                    <div id="{{$valley->slug}}" class="card card-valley mb-4">
                        <a class="h-100 w-100 d-flex flex-column justify-content-around align-items-center" href="{{route('guest.index', $valley->slug)}}">
                            <h3>{{$valley->name}}</h3>
                        
                        <h6>{{$valley->tours->count()}} Percorsi </h6>
                        </a>
                        

                    </div>
                @endforeach

            </div>
        </div>
        

   

</div>


@endsection

