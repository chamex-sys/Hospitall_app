@extends('layouts.app') <!-- Utilise le layout app.blade.php -->

@section('content') <!-- Début de la section 'content' -->

@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show position-relative" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="close position-absolute top-0 end-0 m-2" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('assets/img/bg_image_1.jpg') }}');">
    <div class="hero-section">
        <div class="container text-center wow zoomIn" id="a">
            <span class="subhead">Let's discover which doctor is the best for you !</span>
            <h1 class="display-4">Describe your symptoms</h1>
            <a href="#app" class="btn btn-primary">Let's Consult</a>
        </div>
    </div>
</div>

<div class="page-section" id="app">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make a Consultation</h1>
        <form action="{{ route('suggest.doctor') }}" method="POST">
            @csrf  
            <div class="row mt-5">    
                <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                    <textarea name="symptoms" id="symptoms" class="form-control" rows="5" placeholder="Exemple : fièvre, toux, fatigue..."></textarea>
                </div>
            </div>
            <button type="submit" class="btn btn-primary mt-3">Envoyer</button>
        </form>
    </div>
</div>

@include('user.doctor')
@include('user.latest')

@endsection <!-- Fin de la section 'content' -->
