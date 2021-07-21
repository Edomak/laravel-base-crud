@extends('layouts.main')

@section('content')
    <h1>Edit Comic</h1>

    <form action="{{ route('comics.update', $comic->id) }}" method="POST">
        @csrf
        @method('PATCH')
        <div class="form-group">
            <label for="title">Titolo</label>
            <input type="text" class="form-control" id="title" placeholder="Inserisci il titolo" name="title" value="{{ $comic->title }}">
        </div>
        <div class="form-group">
            <label for="description">Descrizione</label>
            <textarea class="form-control" id="description" name="description" value="{{ $comic->description }} placeholder="Inserisci la descrizione del fumetto" rows="5"></textarea>
          </div>
        <div class="form-group">
            <label for="thumb">Immagine di copertina</label>
            <input type="text" class="form-control" id="thumb" placeholder="Inserisci l url delll'immagine" name="thumb" value="{{ $comic->thumb }}">
        </div>
        <div class="form-group">
            <label for="price">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" placeholder="Inserisci il prezzo" name="price" value="{{ $comic->price }}">
        </div>
        <div class="form-group">
            <label for="series">Serie</label>
            <input type="text" class="form-control" id="series" placeholder="Inserisci la serie" name="series" value="{{ $comic->series }}">
        </div>
        <div class="form-group">
            <label for="sale_date">Data di vendita</label>
            <input type="text" class="form-control" id="sale_date" placeholder="Inserisci la data di vendita" name="sale_date" value="{{ $comic->sale_date }}">
        </div>
        <div class="form-group">
            <label for="type">Tipologia</label>
            <input type="text" class="form-control" id="type" placeholder="Inserisci la tipologia" name="type" value="{{ $comic->type }}">
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
      </form>
@endsection
