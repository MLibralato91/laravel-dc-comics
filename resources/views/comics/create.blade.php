@extends('layouts.app');

@section('content')
    <section class="container">
        <h1>Inserisci Nuovo prodotto</h1>
        <form action="{{ route('comic.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                <div id="titleHelp" class="form-text">Inserisci un titolo</div>
                @error('title')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <textarea name="description" id="description" cols="30" rows="10">

            </textarea>
            @error('description')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <textarea name="thumb" id="thumb" cols="30" rows="10">

            </textarea>
            @error('thumb')
                <div class="alert alert-danger">
                    {{ $message }}
                </div>
            @enderror
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="myPrice">
                <div id="myPrice" class="form-text">Inserisci un prezzo</div>
                @error('price')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="mySeries">
                <div id="mySeries" class="form-text">Inserisci la serie</div>
                @error('series')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="mySale_date">
                <div id="mySale_date" class="form-text">Inserisci la data (AAAA/MM/DD)</div>
                @error('sale_date')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="myType">
                <div id="myType" class="form-text">Inserisci la tipologia</div>
                @error('type')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>




            </div>

            <button type="submit" class="btn btn-primary">Crea</button>

        </form>
    </section>
    @csrf
@endsection
