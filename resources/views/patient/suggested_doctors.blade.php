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
.page-footer {
    background-color: #e9ecef;
    padding: 20px 0;
    margin-top: 40px;
    text-align: center;
    font-size: 14px;
    color: #6c757d;
    border-top: 1px solid #dee2e6;
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


    
