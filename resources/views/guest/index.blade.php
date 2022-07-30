@extends('layouts.app')

@section('content')

<h1>{{$valley->name}}</h1>

@foreach($valley->tours as $tour)

    <a href="{{route('guest.show', [$valley->slug, $tour->slug])}}">{{$tour->name}}</a>

    <img src="{{asset('storage/' . $tour->altimetry_image)}}" alt="" style="width: 100px;height:100px">
    
    

@endforeach

@endsection