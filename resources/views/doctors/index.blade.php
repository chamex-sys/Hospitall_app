@extends('layouts.app')

@section('content')
<h1 style="text-align: center;">Liste des Docteurs</h1>

<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px;">
    @foreach ($doctors as $doctor)
        <div style="flex: 0 0 calc(33.33% - 40px); max-width: calc(33.33% - 40px); border: 1px solid #ddd; border-radius: 10px; box-shadow: 2px 2px 8px #ccc; overflow: hidden; text-align: center; background-color: #f9f9f9;">
            <img src="{{ asset('doctorimage/' . $doctor->image) }}" alt="Image de {{ $doctor->name }}" style="width: 190px ; height:250px; object-fit: cover;">
            <div style="padding: 10px;">
                <h3 style="margin: 10px 0;">{{ $doctor->name }}</h3>
                <p><strong>Spécialité :</strong> {{ $doctor->speciality }}</p>
                <p><strong>Chambre :</strong> {{ $doctor->room }}</p>
                <a href="{{ route('doctors.calendar', $doctor->id) }}" style="display: inline-block; margin-top: 10px; padding: 8px 12px; background-color: #3490dc; color: white; border-radius: 5px; text-decoration: none;">
                    📅 Voir le calendrier
                </a>
            </div>
        </div>
    @endforeach
</div>
@endsection
