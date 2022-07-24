@extends('layouts.app')

@section ('content')
<div id="main-sections" class="w-75 m-auto">

<h1>Esplora</h1>

<div id="container-sections" class="w-100 d-flex h-75 justify-content-around">

    <div class="card card-sections p-0">
        <a href="{{route('guest.valleys')}}" class="h-100">
            <img src="{{asset('img/sections-tours.jpg')}}" class="card-img-top h-50" alt="..." />

            <div class="card-body">
            <h5 class="card-title">Percorsi</h5>
            <p class="card-text">
                
            </p>
            </div>
        </a>
      
    </div>

    <div class="card card-sections p-0">
        <a href="" class="h-100">
            <img src="{{asset('img/sections-about.jpg')}}" class="card-img-top h-50" alt="..." />

                <div class="card-body">
                    <h5 class="card-title">About MTB</h5>
                    <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                    </p>
                </div>

        </a>
      
    </div>

    <div class="card card-sections p-0">
        <a href="" class="h-100">

            <img src="{{asset('img/section-news.jpg')}}" class="card-img-top h-50" alt="..." />

                <div class="card-body">
                    <h5 class="card-title">News</h5>
                    <p class="card-text">
                    Some quick example text to build on the card title and make up the
                    bulk of the card's content.
                    </p>
                </div>

        </a>
      
    </div>

</div>

</div>

@endsection