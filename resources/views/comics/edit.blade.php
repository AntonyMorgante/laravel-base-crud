@extends("layouts.base")

@section("title","Modifica un fumetto")

@section("content")
<div class="container">
    <form action="{{route('comics.update',$comic->id)}}" method="POST">

        @csrf
        @method("PUT")

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Inserisci il titolo del fumetto...">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <input type="text" class="form-control" id="description" name="description" placeholder="Inserisci una breve descrizione">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Copertina</label>
            <input type="text" class="form-control" id="thumb" name="thumb" placeholder="Inserisci l'indirizzo dell'immagine">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" placeholder="Inserisci il prezzo di vendita">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie</label>
            <input type="text" class="form-control" id="series" name="series" placeholder="Inserisci la serie a cui appartiene il fumetto">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" placeholder="Inserisci la data di uscita">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Genere</label>
            <input type="text" class="form-control" id="type" name="type" placeholder="Inserisci il genere a cui appartiene il fumetto">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
