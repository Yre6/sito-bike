@extends('layouts.admin')

@section('content')

<h1> Crea un nuovo percorso</h1>

<form action="{{route('admin.tours.store')}}" enctype="multipart/form-data" method="post">
    @csrf

    <!-- Name Input -->
    <div class="mb-3">
        <label for="name" class="form-label">Nome del percorso</label>
        <input required type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" placeholder="Inserisci il nome del percorso" value="{{ old('name') }}" maxlength="300">
        <small id="nameHelper" class="text-muted">Assicurati di non superare i 300 caratteri, spazi inclusi.</small>
        @error('name')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Distance Input -->
    <div class="mb-3">
       <label for="distance" class="form-label">Lunghezza del percorso</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">km</span>
            <input required type="text" name="distance" id="distance" class="form-control @error('distance') is-invalid @enderror" placeholder="" value="{{ old('distance') }}">
        </div>
        <small id="distanceHelper" class="text-muted">Inserisci un numero intero</small>
        @error('distance')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>

    <!-- Altitude Delta Input -->
    <div class="mb-3">
       <label for="altitude_delta" class="form-label">Lunghezza del percorso</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">m</span>
            <input required type="text" name="altitude_delta" id="altitude_delta" class="form-control @error('altitude_delta') is-invalid @enderror" placeholder="" value="{{ old('altitude_delta') }}">
        </div>
        <small id="altitude_deltaHelper" class="text-muted">Inserisci un numero intero</small>
        @error('altitude_delta')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>
    
        

</form>

@endsection