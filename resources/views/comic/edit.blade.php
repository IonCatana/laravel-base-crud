@extends('layouts.base')

@section('pageTitle')
    Modifica: {{ $comic->title }}
@endsection

@section('content')
    <h1>Modifica: {{ $comic->title }}</h1>

    <div class="container my-5 d-flex justify-content-center">

        <form action="{{ route('comic.update', ['comic' => $comic->id]) }}" method="post">

            @csrf {{-- token di validazione obbligatorio --}}
            @method('PUT')

            <div class="mb-3"> {{-- input tipo text --}}
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" value="{{ $comic->title }}">
            </div>

            <div class="mb-3"> {{-- inserisco una textarea per più righe text --}}
                <label for="description" class="form-label">Descrizione</label>
                <textarea class="form-control" name="description" id="description">
                {{ $comic->description }}
              </textarea>
            </div>

            <div class="mb-3"> {{-- input per inserire URL e validarla --}}
                <label for="thumb" class="form-label">URL immagine da caricare</label>
                <input type="url" class="form-control" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            </div>

            <div class="mb-3"> {{-- input per numeri, con step=".01" permetto fino a 2 decimali dopo la virgola --}}
                <label for="price" class="form-label">Prezzo</label>
                <input type="number" class="form-control" step=".01" name="price" id="price" value="{{ $comic->price }}">
            </div>

            <select class="form-select mb-3" id="type" name="type"> {{-- select tag con options --}}
                <option {{ $comic->type == 'comic book' ? 'selected' : '' }} value="comic book">comic book</option>
                <option {{ $comic->type == 'graphic novel' ? 'selected' : '' }} value="graphic novel">graphic novel
                </option>
            </select>

            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" value="{{ $comic->series }}">
            </div>

            <div class="mb-3"> {{-- input di tipo data (europea) --}}
                <label for="sale_date" class="form-label">Data</label>
                <input type="date" class="form-control" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            </div>

            {{-- bottone per inviare tramite metodo post --}}
            <button type="submit" class="btn btn-primary">Modifica</button>

        </form>

    </div>
@endsection
