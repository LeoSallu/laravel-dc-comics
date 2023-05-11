@extends('layout.app')

@section('page.main')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-danger my-5">Torna all'elenco</a>

        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo del fumetto</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il Titolo del fumetto">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del fumetto</label>
                <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci la descrizione del fumetto">
            </div>
            <div class="mb-3">
                <label for="src" class="form-label">Immagine del fumetto</label>
                <input type="text" class="form-control" id="src" name="src" placeholder="Inserisci l'indirizzo dell'immagine del fumetto">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo del fumetto</label>
                <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo del fumetto">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie del fumetto</label>
                <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie a cui appartiene fumetto">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita del fumetto</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita del fumetto">
            </div>
            <button type="submit" class="btn btn-success">Crea</button>
        </form>

    </div>
@endsection
