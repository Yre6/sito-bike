@extends('layouts.app')

@section('content')

<div id="prova" class="container-valleys w-100">
    <div class="w-75 h-100 m-auto d-flex">
        <div class="col-6 d-flex flex-column justify-content-center align-items-center">
            
        <img src="{{asset('img/provincia.jpg')}}" usemap="#image-map">

    <map name="image-map">
        <area class="val-di-scalve" alt="val-di-scalve" title="Val di Scalve" href="" coords="254,68,282,45,297,38,346,53,345,66,315,89,283,114,266,97,253,81" shape="poly" style="filter:greyscale(100%)">
        <area class="val-seriana"target="" alt="val-seriana" title="Val Seriana" href="" coords="238,169,290,136,251,83,251,66,280,42,284,22,247,27,207,46,197,70,180,72,165,100,174,130,156,146,151,185,136,196,174,222,195,222,192,201,196,174,185,161,204,155" shape="poly">
        <area class="val-gandino" target="" alt="val-gandino" title="Val Gandino" href="" coords="236,170,205,155,187,161,197,173,194,199,212,193,233,179" shape="poly">
        <area class="val-calepio-laghi" target="" alt="val-calepio-laghi" title="Val Calepio e Laghi" href="" coords="289,139,306,150,277,187,268,200,275,223,270,238,277,248,218,271,194,263,177,275,169,259,161,248,172,224,198,222,193,201,214,194,237,180,238,170" shape="poly">
        <area class="bergamo" target="" alt="bergamo" title="Bergamo" href="" coords="136,197,169,221,161,240,149,240,140,248,132,247,124,254,130,263,112,281,101,283,89,266,75,266,87,208,99,208,103,202,121,209" shape="poly">
        <area class="hinterland"target="" alt="hinterland" title="Hinterland" href="" coords="50,198,45,215,55,227,80,230,73,267,89,268,102,285,111,282,131,261,125,254,134,247,151,241,163,241,177,276,197,265,214,271,201,300,186,300,181,325,202,372,200,392,191,392,174,379,169,395,155,394,131,366,114,389,84,370,65,378,51,352,65,345,55,330,60,311,49,287,25,254,23,212" shape="poly">
        <area class="val-imagna" target="" alt="val-imagna" title="Val Imagna" href="" coords="30,156,51,149,71,171,81,190,77,205,83,211,80,226,56,224,47,214,52,195,39,186" shape="poly">
        <area class="val-brembana" target="" alt="val-brembana" title="Val Brembana" href="" coords="135,194,133,180,119,185,124,154,132,115,146,114,162,100,179,70,194,67,202,49,150,40,102,41,85,52,38,72,45,95,59,100,54,120,45,133,48,144,82,189,80,203,94,207,103,196,119,207" shape="poly">
        <area class="val-serina"target="" alt="val-serina" title="Val Serina" href="" coords="162,101,146,114,133,115,121,179,134,177,138,191,149,183,155,146,171,129" shape="poly">
    </map>



        </div>
        <div class="col-6 d-flex flex-column justify-content-around align-items-center">
            <h1>
                Scopri i percorsi
            </h1>
            <div class="container-card-valley d-flex flex-wrap">
                @foreach ($valleys as $valley)
                   
                    <div class="card card-valley">
                        <a class="h-100 w-100 d-flex flex-column  justify-content-around align-items-center" href="{{route('guest.index', $valley->slug)}}">
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
