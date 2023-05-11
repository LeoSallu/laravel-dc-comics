@extends('layout.app')

@section('page.main')
    <div class="container">
        <h1 class="text-primary my-5">Archivio Fumetti DC Comics</h1>
        <a class="btn btn-primary" href={{ route('comics.create') }} role="button">Aggiungi un fumetto</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Titolo</th>
                    <th scope="col">Descrizione</th>
                    <th scope="col">Thumb link</th>
                    <th scope="col">Prezzo</th>
                    <th scope="col">Serie</th>
                    <th scope="col">In uscita il</th>
                </tr>
            </thead>

            @foreach ($comics as $comic)
                <tbody>
                    <tr>
                        <td>{{ $comic->title }}</td>
                        <td>{{ Str::limit($comic->description, $limit = 100, $end = '...') }}</td>
                        <td>{{ Str::limit($comic->src, $limit = 30, $end = '...') }}</td>
                        <td>{{ $comic->price }}</td>
                        <td>{{ $comic->series }}</td>
                        <td>{{ date('d-m-Y', strtotime($comic->sale_date)) }}</td>
                        <td><a class="btn btn-success" href={{ route('comics.show', $comic->id) }} role="button">Info</a></td>
                        <td><a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning">Modifica</a></td>
                        <td>
                            <form action="{{ route('comics.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <input id='alert' type="submit" value="Elimina" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>

                </tbody>
            @endforeach
        </table>


    </div>
@endsection
