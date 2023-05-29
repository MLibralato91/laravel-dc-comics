@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>
        <a href="{{ route('comic.index') }}" class="btn btn-primary">Vai ai fumetti</a>
        <a href="{{ route('comic.create') }}" class="btn btn-primary">Crea un nuovo fumetto</a>


    </section>
@endsection
