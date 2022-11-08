@extends('template')

@section('container')
    <h1>About Me</h1>
    <br>
    <h3>{{ $nim }}</h3>
    <h3>{{ $name }}</h3>
    <p>{{ $email }}</p>
    {{-- <img src="img/{{ $photo }}" alt="{{ $name }}" width="200"> --}}
    
@endsection