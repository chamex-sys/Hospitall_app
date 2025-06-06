@extends('layouts.app')

@section('content')

<style>
    .page-hero {
        background-color: #00D1A0;
        color: white;
        padding: 100px 0;
        background-blend-mode: overlay;
        background-size: cover;
        background-position: center;
    }

    .hero-section .subhead {
        font-size: 20px;
        color: white;
        font-weight: 300;
    }

    .hero-section h1 {
        font-size: 48px;
        font-weight: 700;
        margin-top: 20px;
    }

    .btn-primary {
        background-color: #00D1A0;
        border-color: #00B38F;
        font-weight: bold;
    }

    .btn-primary:hover {
        background-color: #00B38F;
        border-color: #00A481;
    }

    .form-control {
        border-radius: 8px;
        padding: 15px;
        font-size: 16px;
        border: 1px solid #ced4da;
    }

    .alert-success {
        background-color: #d1f7ed;
        border-color: #b5f0e0;
        color: #1f705e;
    }

    .page-section {
        padding: 60px 0;
    }

    h1.text-center {
        color: #00D1A0;
        font-weight: 600;
        margin-bottom: 40px;
    }

    #symptoms {
        min-height: 180px;
        resize: vertical;
    }
</style>

@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show container" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('assets/img/bg_image_1.jpg') }}');">
    <div class="hero-section text-center">
        <div class="container wow zoomIn">
            <span class="subhead">Let's discover which doctor is the best for you!</span>
            <h1 class="display-4">Describe your symptoms</h1>
            <a href="#app" class="btn btn-primary mt-4">Let's Consult</a>
        </div>
    </div>
</div>

<div class="page-section" id="app">
    <div class="container">
        <h1 class="text-center wow fadeInUp">Make a Consultation</h1>
        <form action="{{ route('suggest.doctor') }}" method="POST">
            @csrf  
            <div class="row justify-content-center mt-5">    
                <div class="col-12 col-md-8 py-2 wow fadeInLeft">
                    <textarea name="symptoms" id="symptoms" class="form-control" placeholder="Exemple : fièvre, toux, fatigue..."></textarea>
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary mt-4 px-5 py-2">Envoyer</button>
            </div>
        </form>
    </div>
</div>

<!-- @include('user.doctor')
@include('user.latest') -->

@endsection
