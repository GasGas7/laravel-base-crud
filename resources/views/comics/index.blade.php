@extends('layout.app')

{{-- Main Content --}}
@section('main_content')


    <div class="container-xl text-center p-3">
        <h1>Comics List</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>TITOLO</th>
                    <th>AUTORE</th>
                    <th>PREZZO</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->titolo }}</td>
                        <td>{{ $comic->autore }}</td>
                        <td>{{ $comic->prezzo }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a name="" id="" class="btn btn-primary" href="{{ route('comics.create') }}" role="button">Add new comic</a>
    </div>

@endsection
{{-- /Main Content --}}
