@extends('layouts.app')

@section('content')
<h2 style="text-align: center; color: #00D3AF; margin-top: 20px;">📅 Calendar of {{ $doctor->name }}</h2>
<p style="text-align: center; font-size: 18px; margin-bottom: 30px;">Spécialité : <strong>{{ $doctor->speciality }}</strong></p>

<div style="max-width: 900px; margin: 0 auto; padding: 20px;">
    <table style="width: 100%; border-collapse: collapse; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
        <thead style="background-color: #00D3AF; color: white;">
            <tr>
                <th style="padding: 12px;">Date</th>
                <th style="padding: 12px;">Patient name</th>
                <th style="padding: 12px;">Message</th>
                <th style="padding: 12px;">Status</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($appointments as $appointment)
                <tr style="background-color: #f9f9f9; text-align: center;">
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{ $appointment->date }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{ $appointment->name }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">{{ $appointment->message }}</td>
                    <td style="padding: 10px; border-bottom: 1px solid #ddd;">
                        @if ($appointment->status === 'Confirmé')
                            <span style="color: green; font-weight: bold;">✔ Approved</span>
                        @elseif ($appointment->status === 'Annulé')
                            <span style="color: red; font-weight: bold;">✘ canceld </span>
                        @else
                            <span style="color: orange; font-weight: bold;">⏳ in progress</span>
                        @endif
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="4" style="padding: 15px; text-align: center; background-color: #fdfdfd; color: #666;">Aucun rendez-vous trouvé</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div style="text-align: center; margin-top: 30px;">
        <a href="{{ route('doctors.index') }}" style="color: white; background-color: #00D3AF; padding: 10px 20px; text-decoration: none; border-radius: 5px;">
            ← Back 
        </a>
    </div>
</div>
@endsection
