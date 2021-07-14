@extends('layout.app')

{{-- Main Content --}}
@section('main_content')
   <h1>Hello CRUD</h1>
    
   <a href="{{route('comics.index')}}">Go to comics page</a>
@endsection
{{-- /Main Content --}}
