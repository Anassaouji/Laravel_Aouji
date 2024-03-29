@extends('layouts.app')

@section('content')
<h1>Détails du Livre</h1>

@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<div class="card">
    <div class="card-body">
        <h5 class="card-title">{{ $livre->titre }}</h5>
        <p class="card-text">Date de publication : {{ $livre->date_publication}}</p>
        <p class="card-text">Prix : {{ $livre->prix }} €</p>
        <p class="card-text">Auteur : {{ $livre->auteur_id }}</p>
    </div>
</div>

@endsection
