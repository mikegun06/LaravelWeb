@extends('template')

@section('container')
    @foreach ($cats as $cat)
        <article class="mb-5">
            <h2>{{ $cat["title"] }}</h2>
            <h5>Dari : {{ $cat["author"] }}</h5>
            <p>{{ $cat["body"] }}</p>
        </article>
    @endforeach
    @if ($author ?? 'John Cena')
        <h4>John Cena is Our Boss</h4>
    @endif
@endsection