@extends("layouts.base")

@section("title","Tutti i fumetti")

@section("content")
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
            <div class="comic">
                <h4>{{$comic->title}}</h4>
                <img src="{{$comic->thumb}}" alt="">
                <p>Serie: {{$comic->series}}</p>
                <p>Prezzo: {{$comic->price}}</p>
                <a href="{{route('comics.show', $comic->id)}}">Vedi in dettaglio</a>
            </div>
        @endforeach        
    </div>
</div>
