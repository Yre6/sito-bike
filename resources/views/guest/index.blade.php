@extends('layouts.app')

@section('content')

<h1>{{$valley->name}}</h1>

@foreach($valley->tours as $tour)

    <a href="{{route('guest.show', [$valley->slug, $tour->slug])}}">{{$tour->name}}</a>
    



@endforeach

@endsection