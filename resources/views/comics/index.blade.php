@extends("layouts.base")

@section("title","Tutti i fumetti")

@section("content")
<div class="container">
    <div class="text-center my-4">
        <a href="{{route('comics.create')}}"><button type="button" class="btn btn-primary">Aggiungi un fumetto</button></a>
    </div>
    <div class="row">
        @foreach ($comics as $comic)
            <div class="col-3">
                <div class="text-center">
                    <h4>{{$comic->title}}</h4>
                    <img src="{{$comic->thumb}}" alt="">
                    <p>Serie: {{$comic->series}}</p>
                    <p>Prezzo: {{$comic->price}}</p>
                </div>
                <div class="text-center">
                    <a href="{{route('comics.show', $comic->id)}}"><button type="button" class="btn btn-primary">Dettagli</button></a>
                        <a href="{{route('comics.edit', $comic->id)}}"><button type="button" class="btn btn-primary">Modifica</button></a>
                        <form action="{{route('comics.destroy', $comic->id)}}" method="POST">
                            @csrf
                            @method("DELETE")
                            <button type="submit" class="btn btn-danger">Elimina</button>
                        </form>
                    </div>
                </div>
        @endforeach        
    </div>
</div>
