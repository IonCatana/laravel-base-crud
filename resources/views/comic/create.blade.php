{{-- Creo un file index che contenga tutti i fumetti --}}
@extends('layouts.base')

@section('pageTitle', 'Creazione Fumetto')

@section('content')

    <div class="container my-5 d-flex justify-content-center">
        <a href=" {{ route('comic.index') }}" class="btn btn-info">Torna a tutti i fumetti</a>
    </div>
    <div class="container my-5 d-flex justify-content-center">
        {{-- URI di riferimento per salvare i dati inviati, metodo di invio post --}}
        <form action="{{ route('comic.store') }}" method="post">
            @csrf {{-- token di validazione obbligatorio --}}
            <div class="mb-3"> {{-- input tipo text --}}
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ old('title') }}">
            </div>
            <div class="mb-3"> {{-- inserisco una textarea per più righe text --}}
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description">
                    {{ old('description') }}
              </textarea>
            </div>
            <div class="mb-3"> {{-- input per inserire URL e validarla --}}
                <label for="thumb" class="form-label">URL immagine da caricare</label>
                <input type="url" class="form-control" name="thumb" id="thumb" value="{{ old('thumb') }}">
            </div>
            <div class="mb-3"> {{-- input per numeri, con step=".01" permetto fino a 2 decimali dopo la virgola --}}
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" step=".01" name="price" id="price" value="{{ old('price') }}">
            </div>
            <select class="form-select mb-3" id="type" name="type"> {{-- select tag con options --}}
                <option selected>Scegli tipo</option>
                <option value="comic book">comic book</option>
                <option value="graphic novel">graphic novel</option>
                <option {{ old('type') == 'comic book' ? 'selected' : '' }} value="comic book">comic book</option>
                <option {{ old('type') == 'graphic novel' ? 'selected' : '' }} value="graphic novel">graphic novel
                </option>
            </select>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ old('series') }}">
            </div>
            <div class="mb-3"> {{-- input di tipo data (europea) --}}
                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ old('sale_date') }}">
            </div>

            {{-- bottone per inviare tramite metodo post --}}
            <button type="submit" class="btn btn-primary">Invia</button>
        </form>
    </div>

@endsection
