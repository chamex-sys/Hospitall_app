@extends('layouts.app') {{-- Adapte selon ton layout --}}

@section('content')
<style>
    body {
        background-color: #f8f9fa;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .container {
        max-width: 1050px;
        margin: 40px auto;
    }

    h1 {
        color: #00D1A0;
        margin-bottom: 30px;
        text-align: center;
        font-weight: 9px ;
        font-size: 25px ;
    }

    .grid {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

   .card {
    /* styles existants... */
    background-color: white;
    border-radius: 12px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    padding: 20px;
    transition: transform 0.3s ease;
    text-align: center; /* ✅ Ajout important */
}


    .card:hover {
        transform: translateY(-5px);
    }

    .card img {
        width: 250px;
    height: 350px;
    object-fit: cover;
    border-radius: 8px;
    margin-bottom: 15px;
    display: block;            /* ✅ permet le centrage */
    margin-left: auto;         /* ✅ centrage horizontal */
    margin-right: auto;        /* ✅ centrage horizontal */
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
<h1>Results for : "{{ $symptomsInput }}"</h1>

    @if($doctors->isEmpty())
        <div class="no-result">
            No doctor is associated to these symptoms.
        </div>
    @else
        <div class="grid">
            @foreach($doctors as $doctor)
                <div class="card">
                    <img src="/doctorimage/{{$doctor->image}}" alt="Image de {{ $doctor->name }}" height="25px" width="10px">
                    <p><span class="label">Name</span> {{ $doctor->name }}</p>
                    <p><span class="label">Phone :</span> {{ $doctor->phone ?? 'Non renseigné' }}</p>
                    <p><span class="label">Spéciality :</span> {{ $doctor->speciality }}</p>
                    <p><span class="label">Room :</span> {{ $doctor->room }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
      <footer class="page-footer">
                  <div class="container">
          <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
              <h5>Company</h5>
              <ul class="footer-menu">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Career</a></li>
                <li><a href="#">Editorial Team</a></li>
                <li><a href="#">Protection</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
              <h5>More</h5>
              <ul class="footer-menu">
                <li><a href="#">Terms & Condition</a></li>
                <li><a href="#">Privacy</a></li>
                <li><a href="#">Advertise</a></li>
                <li><a href="#">Join as Doctors</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
              <h5>Our partner</h5>
              <ul class="footer-menu">
                <li><a href="#">One-Fitness</a></li>
                <li><a href="#">One-Drugs</a></li>
                <li><a href="#">One-Live</a></li>
              </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
              <h5>Contact</h5>
              <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
              <a href="#" class="footer-link">701-573-7582</a>
              <a href="#" class="footer-link">healthcare@temporary.net</a>

              <h5 class="mt-3">Social Media</h5>
              <div class="footer-sosmed mt-3">
                <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
              </div>
            </div>
          </div>

          <hr>

          <p id="copyright">Copyright &copy; 2020 <a href="https://macodeid.com/" target="_blank">MACode ID</a>. All right reserved</p>
        </div>
      </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
@endsection


    
