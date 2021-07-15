@extends('layout.app')

@section('main_content')
<div class="container-xl pt-3">
    <div class="d-flex flex-column">
        <h2>Edit this comic</h2>
        {{-- form --}}
    <form action="{{route('comics.update', $comic->id )}}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="">Titolo</label>
            <input type="text" name="titolo" id="titolo" class="form-control" placeholder="Add title..."
                aria-describedby="helpId" value="{{$comic->titolo}}">
            <small id="helpId" class="text-muted">Max 100 char</small>
        </div>

        <div class="form-group">
            <label for="">Autore</label>
            <input type="text" class="form-control" name="autore" id="autore" aria-describedby="helpId"
                placeholder="Add Author..." value="{{$comic->autore}}">
            <small id="helpId" class="form-text text-muted">Max 100 char</small>
        </div>

        <div class="form-group">
            <label for="">Prezzo</label>
            <input type="text" class="form-control" name="prezzo" id="prezzo" aria-describedby="helpId"
                placeholder="Add Price..." value="{{$comic->prezzo}}">
            <small id="helpId" class="form-text text-muted">Only integer</small>
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    {{-- /form --}}
    </div>
    
</div>
    

@endsection
