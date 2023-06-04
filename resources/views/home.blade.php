@extends('layouts.app')
@section('content')
    <div class="jumbotron p-5 mb-4 bg-light rounded-3">
        <div class="container py-5">
            <h1 class="display-5 fw-bold">
                Benvenuto nel tuo portfolio, presto potrai averne anche tu uno.
            </h1>
            <div class="justify-content-center align-items-center text-center">
                <a href="{{ route('login') }}" class="btn btn-primary btn-lg" type="button">Login</a>
                <a href="{{ route('register') }}" class="btn btn-primary btn-lg" type="button">Registrati</a>
            </div>
        </div>
    </div>
    <div class="content">
        <div class="container">
            <p>Registrati e scopri tutte le potenzialità di un Portfolio. Entra a far parte del nostro ristrettissimo Team.</p>
        </div>
    </div>
@endsection
