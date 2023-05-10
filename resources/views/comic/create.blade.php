@extends('layout.app')

@section('page.main')
    <div class="container">
        <a href="{{ route('comics.index') }}" class="btn btn-primary my-5">Torna all'elenco</a>

        <form action="{{route('comics.store')}}" method="POST">
            <div class="mb-3">
                <label for="comic_title" class="form-label">Titolo del fumetto</label>
                <input type="text" class="form-control" id="comic_title" placeholder="Inserisci il Titolo del fumetto">
            </div>
            <div class="mb-3">
                <label for="comic_description" class="form-label">Descrizione del fumetto</label>
                <input type="text" class="form-control" id="comic_description"
                    placeholder="Inserisci la descrizione del fumetto">
            </div>
            <div class="mb-3">
                <label for="comic_src" class="form-label">Immagine del fumetto</label>
                <input type="text" class="form-control" id="comic_src"
                    placeholder="Inserisci l'indirizzo dell'immagine del fumetto">
            </div>
            <div class="mb-3">
                <label for="comic_price" class="form-label">Prezzo del fumetto</label>
                <input type="text" class="form-control" id="comic_price" placeholder="Inserisci il prezzo del fumetto">
            </div>
            <div class="mb-3">
                <label for="comic_series" class="form-label">Serie del fumetto</label>
                <input type="text" class="form-control" id="comic_series"
                    placeholder="Inserisci la serie a cui appartiene fumetto">
            </div>
            <div class="mb-3">
                <label for="comic_date" class="form-label">Serie del fumetto</label>
                <input type="text" class="form-control" id="comic_date"
                    placeholder="Inserisci la data di uscita del fumetto">
            </div>
            <button type="submit" class="btn btn-primary">Crea</button>
        </form>

    </div>
@endsection
