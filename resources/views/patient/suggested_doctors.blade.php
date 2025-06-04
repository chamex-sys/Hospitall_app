@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2 class="mb-4">
        @if ($speciality)
            Médecins spécialisés en : <strong>{{ ucfirst($speciality) }}</strong>
        @else
            Aucun médecin trouvé pour vos symptômes.
        @endif
    </h2>

    @if ($doctors->isEmpty())
        <div class="alert alert-warning">
            Désolé, aucun médecin ne correspond à vos symptômes.
        </div>
    @else
        <div class="row">
            @foreach ($doctors as $doctor)
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        @if ($doctor->photo)
                            <img src="{{ asset('storage/' . $doctor->photo) }}" class="card-img-top" alt="Photo de {{ $doctor->name }}">
                        @else
                            <img src="{{ asset('images/default-doctor.png') }}" class="card-img-top" alt="Photo par défaut">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $doctor->name }}</h5>
                            <p class="card-text">
                                <strong>Spécialité :</strong> {{ ucfirst($doctor->speciality) }} <br>
                                <strong>Salle :</strong> {{ $doctor->room }} <br>
                                <strong>Email :</strong> {{ $doctor->email }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
