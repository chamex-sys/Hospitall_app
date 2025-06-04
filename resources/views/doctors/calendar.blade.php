@extends('layouts.app')

@section('content')
<h2>Calendrier de {{ $doctor->name }}</h2>
<p>Spécialité: {{ $doctor->speciality }}</p>

<table border="1" cellpadding="10">
    <thead>
        <tr>
            <th>Date</th>
            <th>Nom du patient</th>
            <th>Message</th>
            <th>Statut</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($appointments as $appointment)
            <tr>
                <td>{{ $appointment->date }}</td>
                <td>{{ $appointment->name }}</td>
                <td>{{ $appointment->message }}</td>
                <td>{{ $appointment->status }}</td>
            </tr>
        @empty
            <tr>
                <td colspan="4">Aucun rendez-vous trouvé</td>
            </tr>
        @endforelse
    </tbody>
</table>

<a href="{{ route('doctors.index') }}">← Retour à la liste</a>
@endsection

