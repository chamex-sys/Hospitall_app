@extends('layouts.app')

@section('content')

<style>
.page-hero {
    background-color: rgba(0, 0, 0, 0.6); /* couche sombre */
    position: relative;
    color: white;
    padding: 100px 0;
    background-blend-mode: overlay;
    background-size: cover;
    background-position: center;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
}

.hero-section .subhead {
    font-size: 20px;
    color: white;
    font-weight: 300;
    writing-mode: vertical-rl; /* texte vertical */
    transform: rotate(180deg); /* pour que le texte soit lisible de bas en haut */
    margin-bottom: 20px;
}

.hero-section h1 {
    font-size: 48px;
    font-weight: 700;
    margin-top: 20px;
    background-color: rgba(0, 0, 0, 0.5); /* fond sombre semi-transparent */
    display: inline-block;
    padding: 10px 20px;
    border-radius: 10px;
    color: #fff;
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    margin-bottom: 20px;
}

.btn-primary {
    background-color: #00D1A0;
    border-color: #00B38F;
    font-weight: bold;
    writing-mode: vertical-rl;
    transform: rotate(180deg);
    padding: 15px 30px;
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

.page-section {
    padding: 60px 0;
}

h1.text-center {
    color: #00D1A0;
    font-weight: 900; /* plus solide */
    margin-bottom: 40px;
    font-size: 56px; /* plus grand */
    text-align: center;
}

#symptoms {
    min-height: 250px; /* élargi en hauteur */
    width: 100%; /* occupe toute la largeur disponible */
    max-width: 800px; /* limite max largeur */
    resize: vertical;
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
    border-radius: 8px;
    padding: 20px;
    font-size: 18px;
}

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

/* Centrer le formulaire de saisie */
#app form .row {
    justify-content: center;
    text-align: center;
    width: 100% ;
}

/* Centrer le bouton 'Envoyer' proprement */
form .text-center {
    margin-top: 20px;
}

/* Amélioration responsive */
@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 32px;
        padding: 8px 16px;
        writing-mode: horizontal-tb;
        transform: none;
    }
    .hero-section .subhead {
        writing-mode: horizontal-tb;
        transform: none;
        margin-bottom: 10px;
    }
    .btn-primary {
        width: 100%;
        writing-mode: horizontal-tb;
        transform: none;
        padding: 10px 0;
    }
    h1.text-center {
        font-size: 40px;
    }
    #symptoms {
        max-width: 100%;
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


<footer class="page-footer">
    <div class="container">
        <div class="row">
            <div class="footer-col">
                <h5>Company</h5>
                <ul class="footer-menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Editorial Team</a></li>
                    <li><a href="#">Protection</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>More</h5>
                <ul class="footer-menu">
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Join as Doctors</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Our partner</h5>
                <ul class="footer-menu">
                    <li><a href="#">One-Fitness</a></li>
                    <li><a href="#">One-Drugs</a></li>
                    <li><a href="#">One-Live</a></li>
                </ul>
            </div>
            <div class="footer-col">
                <h5>Contact</h5>
                <p>351 Willow Street Franklin, MA 02038</p>
                <p>701-573-7582</p>
                <p>healthcare@temporary.net</p>
            </div>
        </div>

        <div class="footer-sosmed">
            <h5>Social Media</h5>
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-linkedin-in"></i></a>
        </div>

        <hr>
        <div id="copyright">
            Copyright © 2020 <a href="#">MACode ID</a>. All right reserved
        </div>
    </div>
</footer>


    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>


@endsection
