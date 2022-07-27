<h1>TOURS INDEX ADMIN</h1>

@foreach ($tours as $tour)

<h2>{{$tour->name}}</h2>
<a href="{{route('admin.tours.edit', $tour->slug)}}">EDIT</a>

@endforeach