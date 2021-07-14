@extends('layout.app')

{{-- Main Content --}}
@section('main_content')
    {{-- <a href="{{route('comics.create')}}">Add new comics</a> --}}
    <div class="container-xl text-center p-3">
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
                <td scope="row">{{$comic->id}}</td>
                <td>{{$comic->titolo}}</td>
                <td>{{$comic->autore}}</td>
                <td>{{$comic->prezzo}}</td>
            </tr>
            
            
            @endforeach
        </tbody>
    </table>
    </div>
    
@endsection
{{-- /Main Content --}}
