@extends('layouts.app');

@section('content')
    <section class="container">
        <h1>Modifica il fumetto con id: {{ $comic->id }}</h1>
        <form action="{{ route('comic.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" id="title" aria-describedby="titleHelp">
                <div id="titleHelp" class="form-text">Inserisci un titolo</div>
            </div>
            <textarea name="description" id="description" cols="30" rows="10">

            </textarea>
            <textarea name="thumb" id="thumb" cols="30" rows="10">

            </textarea>
            <div class="mb-3">
                <label for="price" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="price" id="price" aria-describedby="myPrice">
                <div id="myPrice" class="form-text">Inserisci un titolo</div>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="series" id="series" aria-describedby="mySeries">
                <div id="mySeries" class="form-text">Inserisci un titolo</div>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date" aria-describedby="mySale_date">
                <div id="mySale_date" class="form-text">Inserisci la data (AAAA/MM/DD)</div>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Titolo</label>
                <input type="text" class="form-control" name="type" id="type" aria-describedby="myType">
                <div id="myType" class="form-text">Inserisci un titolo</div>
            </div>



            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-primary">Reset</button>
        </form>
    </section>
@endsection
