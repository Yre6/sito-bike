@extends('layouts.app')

@section('content')

<h1>CIAO

@foreach ($valleys as $valley)

{{$valley->name}}
{{$valley->tours()->count()}}

@endforeach

</h1>




@endsection