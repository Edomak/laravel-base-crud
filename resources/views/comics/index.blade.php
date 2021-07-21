@extends('layouts.main')

@section('content')
    <h1>Comics</h1>

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
                    <td>DELETE</td>
                </tr> 
            @endforeach
        </tbody>
    </table>

    {{ $comics->links() }}
@endsection
