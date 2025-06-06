

      <link rel="stylesheet" href="../assets/css/maicons.css">



      <link rel="stylesheet" href="../assets/css/bootstrap.css">

      <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

      <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

      <link rel="stylesheet" href="../assets/css/theme.css">
      
   <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
 <header>
        <div class="topbar">
          <div class="container">
            <div class="row">
              <div class="col-sm-8 text-sm">
                <div class="site-info">
                  <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                  <span class="divider">|</span>
                  <a href="#"><span class="mai-mail text-primary"></span>onehealth@gmail.com</a>
                </div>
              </div>
              <div class="col-sm-4 text-right text-sm">
                <div class="social-mini-button">
                  <a href="#"><span class="mai-logo-facebook-f"></span></a>
                  <a href="#"><span class="mai-logo-twitter"></span></a>
                  <a href="#"><span class="mai-logo-dribbble"></span></a>
                  <a href="#"><span class="mai-logo-instagram"></span></a>
                </div>
              </div>
            </div> <!-- .row -->
          </div> <!-- .container -->
        </div> <!-- .topbar -->

        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
          <div class="container">
            <a class="navbar-brand" href="#a"><span class="text-primary">One</span>-Health</a>

            <form action="#">
              <div class="input-group input-navbar">
                <div class="input-group-prepend">
                  <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
              </div>
            </form>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-l
              <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="\html\about.html" >About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="\html\doctors.html">Doctors</a>
                </li>  
                  <li class="nav-item">
                  <a class="nav-link" href="\html\blog.html">News</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="\html\contact.html">Contact</a>
                </li>
               
                @if (Route::has('login'))
                @auth 
                 <li class="nav-item">
                  <a class="nav-link" href="{{url('myappointment')}}" style="background-color:greenyellow;color:white;">My Appointments</a>
                </li>
        
                <x-app-layout></x-app-layout>

                @else 
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login </a>
                </li>
                <li class="nav-item">
                  <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                </li>

@endauth
@endif

              </ul>
            </div> <!-- .navbar-collapse -->
          </div> <!-- .container -->
        </nav>
      </header>

<div class="page-hero bg-image overlay-dark" style="background-image: url('{{ asset('assets/img/bg_image_1.jpg') }}');">
    <div class="hero-section text-center">
        <div class="container wow zoomIn">
  <span class="subhead">See when your favorite doctor is available ! </span>
<h1 class="display-4">Pick you day </h1>

            <a href="#app" class="btn btn-primary mt-4 d-block">Let's Consult</a>
        </div>
    </div>
</div>
<style>
 .hero-section a.btn-primary {
    display: block;
    margin: 30px auto 0 auto; /* 30px en haut, auto à gau*/
    width: 200px;
    position: relative;
    text-align: center;
}


 
.page-hero {
    background-color: rgba(0, 0, 0, 0.4); 
    color: white; 
    padding: 100px 0;
    background-blend-mode: overlay;
    background-size: cover;
    background-position: center;
    position: relative;
    text-align: center;
}

.hero-section .subhead {
    font-size: 20px;
    color: white;
    font-weight: 300;
    display: block;
    margin-bottom: 20px;
}

.hero-section h1 {
    font-size: 48px;
    font-weight: 700;
    margin-top: 0;
 
    display: inline-block;
    padding: 10px 20px;
    border-radius: 10px;
    color: #fff;
    margin-bottom: 30px;
}

.btn-primary {
    background-color: #00D1A0;
    border-color: #00B38F;
    font-weight: bold;
    font-size: 18px;
    padding: 12px 30px;
    display: inline-block;
    margin-top: 20px;
    text-align: center;
}

.btn-primary:hover {
    background-color: #00B38F;
    border-color: #00A481;
    
}

.page-section {
    padding: 60px 0;
    text-align: center;
}

.page-section h1.text-center {
    color: #00D1A0;
    font-weight: 900; /* plus solide */
    font-size: 36px; /* plus grand */
    margin-bottom: 40px;
}

#symptoms {
    width: 100%;
    max-width: 700px;
    min-height: 220px; /* un peu plus grand */
    resize: vertical;
    background-color: #f8f9fa;
    border: 1px solid #ced4da;
    box-shadow: 0px 2px 6px rgba(0,0,0,0.1);
    border-radius: 8px;
    padding: 20px;
    font-size: 18px;
    margin: 0 auto;
    display: block;
}

form .text-center {
    margin-top: 20px;
}

/* Responsive */
@media (max-width: 768px) {
    .hero-section h1 {
        font-size: 32px;
        padding: 8px 16px;
    }
    .btn-primary {
        width: 200px;
            display: inline-block;
    }
}

/* Footer (garde la version complète) */
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

/* Centrer le formulaire */
#app form .row {
    justify-content: center;
    text-align: center;
    width: 100%;
}












</style>







@extends('layouts.app')

@section('content')
<h1 style="text-align: center;">Doctors List</h1>

<div style="display: flex; flex-wrap: wrap; justify-content: center; gap: 20px; padding: 20px;">
   <h1 style="text-align: center;">Doctors List</h1>

<div style="position: relative; padding: 20px;">

  <!-- Flèche gauche -->
  <button id="scrollLeft" style="position: absolute; left: 0; top: 50%; transform: translateY(-50%); background-color: #00D1A0; border: none; border-radius: 50%; width: 40px; height: 40px; color: white; z-index: 10;">‹</button>

  <!-- Conteneur scrollable -->
  <div id="doctorCarousel" style="display: flex; overflow-x: auto; scroll-behavior: smooth; gap: 20px; padding: 10px 50px;">

    @foreach ($doctors as $doctor)
        <div style="min-width: 220px; flex-shrink: 0; border: 1px solid #ddd; border-radius: 10px; box-shadow: 2px 2px 8px #ccc; overflow: hidden; text-align: center; background-color: #f9f9f9;">
            <img src="{{ asset('doctorimage/' . $doctor->image) }}" alt="Image de {{ $doctor->name }}" style="width: 190px; height: 250px; object-fit: cover; margin-top: 10px;">
            <div style="padding: 10px;">
                <h3 style="margin: 10px 0;">{{ $doctor->name }}</h3>
                <p><strong>Speciality :</strong> {{ $doctor->speciality }}</p>
                <p><strong>Room :</strong> {{ $doctor->room }}</p>
                <a href="{{ route('doctors.calendar', $doctor->id) }}" style="display: inline-block; margin-top: 10px; padding: 8px 12px; background-color: #00D3AF; color: white; border-radius: 5px; text-decoration: none;">
                    📅 See calendar
                </a>
            </div>
        </div>
    @endforeach

  </div>

  <!-- Flèche droite -->
  <button id="scrollRight" style="position: absolute; right: 0; top: 50%; transform: translateY(-50%); background-color: #00D1A0; border: none; border-radius: 50%; width: 40px; height: 40px; color: white; z-index: 10;">›</button>
</div>

<!-- Script JS pour gérer le scroll -->
<script>
  const container = document.getElementById('doctorCarousel');
  const scrollAmount = 240; // pixels

  document.getElementById('scrollLeft').onclick = () => {
    container.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
  };
  document.getElementById('scrollRight').onclick = () => {
    container.scrollBy({ left: scrollAmount, behavior: 'smooth' });
  };
</script>

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
