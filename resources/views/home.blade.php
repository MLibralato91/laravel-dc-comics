@extends('layouts.app')

@section('content')
    <section class="container">
        <h1>Home page</h1>
        <a href="{{ route('comic.index') }}" class="btn btn-primary">Vai ai fumetti</a>


    </section>
@endsection
