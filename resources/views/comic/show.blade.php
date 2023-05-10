@extends('layout.app')

@section('page.main')

<div class="container">
    
    <div class="card" style="width: 18rem;">
        <img src={{$comic->src}} class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$comic->title}}</h5>
          <p class="card-text">{{$comic->description}}</p>
          <p class="card-text">{{$comic->series}}</p>
          <p class="card-text">{{$comic->price}}</p>
          <a href="{{ route('comics.index') }}" class="btn btn-primary">Torna all'elenco</a>
        </div>
      </div>

</div>
@endsection
