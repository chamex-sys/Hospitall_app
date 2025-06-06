@extends('layouts.app')

@section('content')

<style>
    /* -------- HERO SECTION -------- */
    .page-hero {
        background-image: url('{{ asset('assets/img/bg_image_1.jpg') }}');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        background-color: rgba(0, 0, 0, 0.6); /* fallback */
        background-blend-mode: overlay;
        padding: 100px 0;
        color: white;
    }

    .hero-section .container {
        background: rgba(0, 0, 0, 0.5); /* fond sombre semi-transparent */
        padding: 40px;
        border-radius: 12px;
    }

    .hero-section .subhead {
        font-size: 20px;
        color: #d1f7ed;
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

    /* -------- CONSULTATION FORM -------- */
    .page-section {
        padding: 60px 0;
    }

    .page-section h1.text-center {
        color: #00D1A0;
        font-weight: 600;
        margin-bottom: 40px;
    }

    textarea#symptoms {
        min-height: 180px;
        resize: vertical;
        border-radius: 12px;
        padding: 20px;
        font-size: 16px;
        border: 1px solid #ced4da;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .form-control:focus {
        border-color: #00D1A0;
        box-shadow: 0 0 0 0.2rem rgba(0,209,160,.25);
    }

    .alert-success {
        background-color: #d1f7ed;
        border-color: #b5f0e0;
        color: #1f705e;
    }

    /* -------- FOOTER -------- */
    .page-footer {
        background-color: #1e2d2f;
        color: #d3d3d3;
        padding: 60px 20px 30px;
        font-size: 15px;
    }

    .page-footer .container {
        max-width: 1200px;
        margin: 0 auto;
    }

    .row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-between;
    }

    .footer-col {
        flex: 1 1 22%;
        min-width: 200px;
        margin-bottom: 20px;
    }

    .footer-col h5 {
        color: #ffffff;
        margin-bottom: 20px;
        font-weight: bold;
    }

    .footer-menu {
        list-style: none;
        padding: 0;
    }

    .footer-menu li {
        margin-bottom: 10px;
    }

    .footer-menu a {
        color: #cbd5d8;
        text-decoration: none;
        transition: color 0.3s;
    }

    .footer-menu a:hover {
        color: #00D1A0;
    }

    .footer-sosmed {
        text-align: center;
        margin-top: 30px;
    }

    .footer-sosmed a {
        display: inline-block;
        width: 38px;
        height: 38px;
        line-height: 38px;
        margin: 0 5px;
        text-align: center;
        border-radius: 50%;
        background-color: #00000050;
        color: #ffffff;
        font-size: 16px;
        transition: background 0.3s, color 0.3s;
    }

    .footer-sosmed a:hover {
        background-color: #00D1A0;
        color: #ffffff;
    }

    hr {
        border-top: 1px solid rgba(255, 255, 255, 0.2);
        margin-top: 40px;
    }

    #copyright {
        text-align: center;
        color: #aaa;
        font-size: 14px;
        margin-top: 20px;
    }

    #copyright a {
        color: #00D1A0;
        text-decoration: none;
    }
</style>

{{-- Affichage du message de succès --}}
@if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show container" role="alert">
        {{ session()->get('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif

{{-- HERO SECTION --}}
<div class="page-hero">
    <div class="hero-section text-center">
        <div class="container wow zoomIn">
            <span class="subhead">Let's discover which doctor is the best for you!</span>
            <h1 class="display-4">Describe your symptoms</h1>
            <a href="#app" class="btn btn-primary mt-4">Let's Consult</a>
        </div>
    </div>
</div>

{{-- FORMULAIRE DE CONSULTATION --}}
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

{{-- FOOTER --}}
@include('partials.footer')

{{-- JS --}}
<script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl-carousel/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/wow/wow.min.js') }}"></script>
<script src="{{ asset('assets/js/theme.js') }}"></script>

@endsection
