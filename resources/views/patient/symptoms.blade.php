@extends('layouts.app') <!-- Utilise le layout app.blade.php -->

@section('content') <!-- Début de la section 'content' -->

<div class="container mt-4">
    <h1 class="mb-4">Décrire vos symptômes</h1>

    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form action="{{ route('suggest.doctor') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="symptoms">Vos symptômes :</label>
            <textarea name="symptoms" id="symptoms" class="form-control" rows="5" placeholder="Exemple : fièvre, toux, fatigue..."></textarea>
        </div>

        <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
    </form>
</div>

@endsection <!-- Fin de la section 'content' -->
