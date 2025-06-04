@extends('layouts.app')

@section('content')
<div class="container">
    <h2>suggested doctors</h2>

    @if($doctors->isEmpty())
        <div class="alert alert-warning">
            No doctor is suggested for these symptoms .
        </div>
    @else
        <p><strong>Detected Speciality :</strong> {{ ucfirst($speciality) }}</p>
        <ul class="list-group">
            @foreach($doctors as $doctor)
                <li class="list-group-item">
                    <strong>{{ $doctor->name }}</strong> - Chambre {{ $doctor->room }}
                    <br>
                    Spécialité : {{ $doctor->speciality }}
                </li>
            @endforeach
        </ul>
    @endif
</div>
@endsection

