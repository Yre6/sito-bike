@extends('layouts.app')

@section('content')

<h1>{{$valley->name}}</h1>

@foreach($valley->tours as $tour)


    {{$tour->name}}



@endforeach

@endsection