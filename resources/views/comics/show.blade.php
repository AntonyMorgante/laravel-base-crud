@extends("layouts.base")

@section("title","Fumetto")

@section("content")
    <div class="container">
        <h4>{{$comic->title}}</h4>
        <img src="{{$comic->thumb}}" alt="">
        <p>{{$comic->description}}</p>
        <p>Serie: {{$comic->series}}</p>
        <p>Disponibile da: {{$comic->sale_date}}</p>  
        <p>Prezzo: {{$comic->price}}</p>
        <p></p>
    <a href="{{route("comics.index")}}">Torna alla lista dei fumetti</a>
    </div> 