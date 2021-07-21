@extends('layouts.main')

@section('content')
    <h1>Comics</h1>
    @if (session('deleted'))
        <div class="alert alert-success">
            {{ session('deleted') }}
        </div>
    @endif

    <table class="mt-4 table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th colspan="3">Actions</th>
            </tr>    
        </thead>
        <tbody>  
            @foreach ($comics as $comic)
                <tr>
                    <td>{{ $comic->id }}</td>
                    <td>{{ $comic->title }}</td>
                    <td>
                        <a href="{{ route("comics.show", $comic->id) }}" class="btn btn-success">SHOW</a>
                    </td>
                    <td>
                        <a href="{{ route("comics.edit", $comic->id) }}" class="btn btn-primary">
                            EDIT
                        </a>
                    </td>
                    <td>
                        <form 
                            action="{{ route('comics.destroy', $comic->id) }}" 
                            method="POST"
                            onSubmit = "return confirm('Sei sicuro di voler cancellare definitivamente?')"
                            >
                            @csrf
                            @method('DELETE')
                            <input type="submit" class="btn btn-danger" value="DELETE">
                        </form>
                    </td>
                </tr> 
            @endforeach
        </tbody>
    </table>

    {{ $comics->links() }}
@endsection
