@extends('layout.app')

@section('main_content')
    <div class="container-xl pt-3">
        <div class="d-flex flex-column">
            <h2>Add a comic</h2>
            {{-- form --}}
            <form action="{{ route('comics.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="">Titolo</label>
                    <input type="text" name="titolo" id="titolo" class="form-control" placeholder="Add title..."
                        aria-describedby="helpId">
                    <small id="helpId" class="text-muted">Max 100 char</small>
                </div>

                <div class="form-group">
                    <label for="">Autore</label>
                    <input type="text" class="form-control" name="autore" id="autore" aria-describedby="helpId"
                        placeholder="Add Author...">
                    <small id="helpId" class="form-text text-muted">Max 100 char</small>
                </div>

                <div class="form-group">
                    <label for="">Prezzo</label>
                    <input type="text" class="form-control" name="prezzo" id="prezzo" aria-describedby="helpId"
                        placeholder="Add Price...">
                    <small id="helpId" class="form-text text-muted">Only integer</small>
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            {{-- /form --}}
        </div>

    </div>


@endsection
