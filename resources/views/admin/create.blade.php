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
       <label for="altitude_delta" class="form-label">Dislivello</label>
        <div class="input-group">
            <span class="input-group-text" id="basic-addon1">m</span>
            <input required type="text" name="altitude_delta" id="altitude_delta" class="form-control @error('altitude_delta') is-invalid @enderror" placeholder="" value="{{ old('altitude_delta') }}">
        </div>
        <small id="altitude_deltaHelper" class="text-muted">Inserisci un numero intero</small>
        @error('altitude_delta')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror 
    </div>

    <!-- Duration Input -->
    <div class="mb-3">
        <label for="duration" class="form-label">Durata</label>
        <input required type="text" name="duration" id="duration" class="form-control @error('duration') is-invalid @enderror" placeholder="Inserisci la durata del percorso" value="{{ old('duration') }}" maxlength="70">
        @error('duration')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Description Input -->
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione del percorso</label>
        <textarea class="form-control @error('description') is-invalid @enderror" type="text" name="description" id="description" placeholder="Inserisci la descrizione del percorso" aria-describedby="helpId">{{old('description')}}</textarea>
        @error('description')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Link Gps Input -->
    <div class="mb-3">
        <label for="link_gps" class="form-label mb-4">Link traccia GPS</label>
        <input type="text" name="link_gps" id="link_gps" placeholder="" aria-describedby="link_gpsHelper" class="form-control @error('link_gps') is-invalid @enderror">
        @error('link_gps')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Map Image Input -->
    <div class="mb-3">
        <label for="map_image" class="form-label">Immagine della mappa del percorso</label>
        <input required type="file" name="map_image" id="map_image" class="form-control @error('map_image') is-invalid @enderror" placeholder="" accept="jpeg,jpg,png,gif,bmp,svg,webp">
        <small id="map_imageHelper" class="text-muted">Massimo 1024KB - formati accettati: jpeg, jpg, png, gif, bmp, svg, webp</small>
        @error('map_image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <!-- Altimetry Image Input -->
    <div class="mb-3">
        <label for="altimetry_image" class="form-label">Immagine dell'altimetria</label>
        <input required type="file" name="altimetry_image" id="altimetry_image" class="form-control @error('altimetry_image') is-invalid @enderror" placeholder="" accept="jpeg,jpg,png,gif,bmp,svg,webp">
        <small id="altimetry_imageHelper" class="text-muted">Massimo 1024KB - formati accettati: jpeg, jpg, png, gif, bmp, svg, webp</small>
        @error('altimetry_image')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-flex justify-content-center mb-3">
        <button type="submit" class="btn btn-primary text-white">Save</button>
    </div>
    
        

</form>

@endsection