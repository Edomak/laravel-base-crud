@extends('layouts.main')

@section('content')
    <h1>{{ $comic->title }} </h1>

    <div class="row my-4">
        <div class="col-2">
            <img class="img-fluid" src="{{ $comic->thumb }}" alt="{{ $comic->title }}">
        </div>
        <div class="col-10">
            <h4>Type</h4>
            <p>{{ $comic->type }}</p>
            <h4>Price</h4>
            <p>{{ $comic->price }} &euro;</p>
            <h4>Description</h4>
            <p>{{ $comic->description }}</p>
        </div>
    </div>

    <div class="mt-4">
        <a class="btn btn-primary" href="{{ route("comics.index") }}">All Comics</a>
    </div>
@endsection