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
      </footer>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
@endsection


    
