@extends("layouts.base")

@section("title","Modifica un fumetto")

@section("content")
<div class="container">
    <form action="{{route('comics.update',$comic->id)}}" method="POST">

        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto..." value="{{old('title')??$comic->title}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci una breve descrizione" value="{{old('description')??$comic->description}}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'indirizzo dell'immagine" value="{{old('thumb')??$comic->thumb}}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo di vendita" value="{{old('price')??$comic->price}}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie a cui appartiene il fumetto" value="{{old('series')??$comic->series}}">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita" value="{{old('sale_date')??$comic->sale_date}}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Genere</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il genere a cui appartiene il fumetto" value="{{old('type')??$comic->type}}">
        </div>
        <button type="submit" class="btn btn-primary">Modifica</button>
    </form>

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
