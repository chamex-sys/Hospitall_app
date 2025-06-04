@extends('layouts.app')

@section('content')
<h1>Liste des Docteurs</h1>
@foreach ($doctors as $doctor)
    <div style="border:1px solid #ccc; margin:10px; padding:10px;">
        <h3>{{ $doctor->name }}</h3>
        <p>Spécialité: {{ $doctor->speciality }}</p>
        <p>Chambre: {{ $doctor->room }}</p>
        <a href="{{ route('doctors.calendar', $doctor->id) }}">📅 Voir le calendrier</a>
    </div>
@endforeach
@endsection

