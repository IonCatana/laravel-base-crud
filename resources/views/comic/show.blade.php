{{-- Creo un file index che contenga tutti i fumetti --}}
@extends('layouts.base')

@section('pageTitle', 'Comics')

@section('content')

    <div class="container my-5 d-flex justify-content-center">

        {{-- per prendere i dati utilizzo il nome iniettato, visibile dando il comando php artisan route:list tramite terminale --}}
        <div class="card" style="width: 18rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title">{{ $comic->title }}</h5>
                <p class="card-text">{{ $comic->description }}</p>
                <h6>Tipo: {{ $comic->type }}</h6>
                <h6>Serie: {{ $comic->series }}</h6>
                <h6>Prezzo: {{ $comic->price }}€</h6>
                <h6>Data di vendita: {{ $comic->sale_date }}</h6>
                <a href="{{ route('comic.index') }}" class="btn btn-primary">Torna a tutti i fumetti</a>
            </div>
        </div>

    </div>

@endsection
