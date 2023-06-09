@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Comics</h1>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <a href="{{ route('homepage') }}" class="btn btn-primary">Torna alla Home</a>
        <div class="row gy-4">
            @foreach ($comics as $comic)
                <div class="col-12 col-sm-6 col-md-4 col-lg-3">
                    <div class="card">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                        <div class="card-body">
                            <h5 class="card-title"> {{ $comic->series }}</h5>

                            <a href="{{ route('comic.show', $comic->id) }}" class="btn btn-primary">Vai
                                al
                                dettaglio</a>
                            <a href="{{ route('comic.edit', $comic->id) }}" class="btn btn-warning">Modifica il fumetto</a>
                            <form action="{{ route('comic.destroy', $comic->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"
                                    data-item-item="{{ $comic->title }}">Cancella</button>
                            </form>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>

    @include('partials.popupdelete')
@endsection
