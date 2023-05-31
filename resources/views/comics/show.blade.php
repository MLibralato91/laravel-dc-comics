@extends('layouts.app')

@section('content')
    <section class="container">
        <div class="row">
            <div class="col-4">
                <h1>{{ $comic->title }}</h1>
                <div class="card">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-series"> {{ $comic->title }}</h5>
                        <p class="card-text">{!! $comic->description !!}</p>
                        <p class="card-text"><strong>Prezzo:</strong>
                            {{ $comic->price }} - <strong>Tipologia:</strong> {{ $comic->type }} - <strong>Data di
                                uscita:</strong>
                            {{ $comic->sale_date }}</p>

                    </div>
                </div>
                <a href="{{ route('homepage') }}" class="btn btn-primary">Torna alla Home</a>
            </div>
        </div>

    </section>
@endsection
