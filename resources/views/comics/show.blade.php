@extends("layouts.base")

@section("title","Fumetto")

@section("content")
    <div class="container my-4">
        <h4>{{$comic->title}}</h4>
        <img src="{{$comic->thumb}}" alt="">
        <p class="pt-4">{{$comic->description}}</p>
        <p>Serie: {{$comic->series}}</p>
        <p>Disponibile da: {{$comic->sale_date}}</p>  
        <p>Prezzo: {{$comic->price}}</p>
    <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">Torna alla lista dei fumetti</button></a>
    <a href="{{route('comics.edit', $comic->id)}}"><button type="button" class="btn btn-primary">Modifica</button></a>
    <form action="{{route('comics.destroy', $comic->id)}}" method="POST" class="d-inline-block">
        @csrf
        @method("DELETE")
        <button type="submit" class="btn btn-danger">Elimina</button>
    </form>
    </div> 