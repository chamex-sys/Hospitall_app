@extends('layouts.app')

@section('content')
<div class="container">
    <h2>Décrivez vos symptômes</h2>
    <form action="{{ route('suggest.doctor') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="symptoms">Symptômes :</label>
            <textarea name="symptoms" class="form-control" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary mt-2">Suggérer un docteur</button>
    </form>
</div>
@endsection
