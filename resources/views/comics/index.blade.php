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
                    <th>ACTIONS</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr>
                        <td scope="row">{{ $comic->id }}</td>
                        <td>{{ $comic->titolo }}</td>
                        <td>{{ $comic->autore }}</td>
                        <td>{{ $comic->prezzo }}</td>
                        <td class="d-flex justify-content-center">
                            <a class="px-3" href="{{ route('comics.show', $comic->id) }}">View</a> |
                            <a class="px-3" href="{{ route('comics.edit', $comic->id) }}">Edit</a> |
                            <form action="{{route('comics.destroy',$comic->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                               <button class="px-3" style="border:none; background:transparent; color:#3490dc;" id="trash" type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                                {{-- <a name="" id="" class="btn btn-danger" href="#" role="button"></a> --}}
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a name="" id="" class="btn btn-primary" href="{{ route('comics.create') }}" role="button">Add new comic</a>
    </div>
@endsection
{{-- /Main Content --}}

