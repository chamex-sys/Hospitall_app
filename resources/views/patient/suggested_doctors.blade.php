@extends('layouts.app') {{-- Adapte selon ton layout --}}

@section('content')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        max-width: 1100px;
        margin: 40px auto;
    }

    h2 {
        color: #00D1A0;
        margin-bottom: 30px;
        text-align: center;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

    .card {
        background-color: white;
        border-radius: 12px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        padding: 20px;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
    }

    .card img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .card p {
        margin: 6px 0;
        color: #333;
    }

    .label {
        font-weight: bold;
        color: #00D1A0;
    }

    .no-result {
        text-align: center;
        padding: 30px;
        font-size: 18px;
        color: #555;
    }
</style>

<div class="container">
<h2>Résultats pour : "{{ $symptomsInput }}"</h2>

    @if($doctors->isEmpty())
        <div class="no-result">
            Aucun médecin correspondant à ces symptômes.
        </div>
    @else
        <div class="grid">
            @foreach($doctors as $doctor)
                <div class="card">
                    <img src="/doctorimage/{{$doctor->image}}" alt="Image de {{ $doctor->name }}" height="250px" width="100px">
                    <p><span class="label">Nom :</span> {{ $doctor->name }}</p>
                    <p><span class="label">Téléphone :</span> {{ $doctor->phone ?? 'Non renseigné' }}</p>
                    <p><span class="label">Spécialité :</span> {{ $doctor->speciality }}</p>
                    <p><span class="label">Chambre :</span> {{ $doctor->room }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection
