@extends('layout.app')

@section('page.main')
    <div class="container">
        <h1 class="text-warning my-3">Modifica i dettagli del fumetto</h1>
        <a href="{{ route('comics.index') }}" class="btn btn-warning my-5">Torna all'elenco</a>
        <div>
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif
        </div>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Titolo del fumetto</label>
                <input type="text" class="form-control" id="title" name="title" value="{{$comic->title}}" placeholder="Inserisci il Titolo del fumetto">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione del fumetto</label>
                <textarea class="form-control" id="description" value="{{strip_tags($comic->description)}}" name="description" placeholder="Inserisci la descrizione del fumetto"></textarea>
            </div>
            <div class="mb-3">
                <label for="src" class="form-label">Immagine del fumetto</label>
                <input type="text" class="form-control" id="src" name="src" value="{{$comic->src}}" placeholder="Inserisci l'indirizzo dell'immagine del fumetto">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo del fumetto</label>
                <input type="text" class="form-control" id="price" name="price" value="{{$comic->price}}" placeholder="Inserisci il prezzo del fumetto">
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie del fumetto</label>
                <input type="text" class="form-control" id="series" name="series" value="{{$comic->series}}" placeholder="Inserisci la serie a cui appartiene fumetto">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita del fumetto</label>
                <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Inserisci la data di uscita del fumetto">
            </div>
            <button type="submit" class="btn btn-success">Conferma Modifiche</button>
        </form>

    </div>
@endsection
