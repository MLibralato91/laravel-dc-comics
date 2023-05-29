@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>{{ $comic->title }}</h1>
        <div class="card">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-series"> {{ $comic->title }}</h5>
                <p class="card-text">{!! $comic->description !!}</p>
                <p class="card-text"><strong>Peso:</strong>
                    {{ $comic->price }} - <strong>Tipo:</strong> {{ $comic->type }} - <strong>Cottura:</strong>
                    {{ $comic->sale_date }}</p>

            </div>
        </div>
        <a href="{{ route('homepage') }}" class="btn btn-primary">Torna alla Home</a>
    </section>
@endsection
