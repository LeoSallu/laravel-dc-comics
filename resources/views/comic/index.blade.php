@extends('layout.app')

@section('page.main')
    <div class="container">
        <a class="btn btn-primary" href={{route('comics.create')}} role="button">Aggiungi un fumetto</a>
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
                        <td>{{$comic->title}}</td>
                        <td>{{Str::limit($comic->description,$limit=100,$end='...')}}</td>
                        <td>{{Str::limit($comic->src,$limit=30,$end='...')}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{ date('d-m-Y', strtotime($comic->sale_date)) }}</td>
                        <td><a class="btn btn-primary" href={{route('comics.show',$comic->id)}} role="button">Info</a></td>
                    </tr>

                </tbody>
            @endforeach
        </table>


    </div>
@endsection
