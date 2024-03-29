@extends('layouts.app')

@section('content')
<h1>Modifier le Livre</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </div>
@endif

<form action="{{ url('bibliotheques/' . $livre->id . '/update') }}" method="POST">
    @csrf
    @method('PUT') <div class="form-group">
        <label for="titre">Titre</label>
        <input type="text" class="form-control" id="titre" name="titre" value="{{ old('titre', $livre->titre) }}">
    </div>
    <div class="form-group">
        <label for="date_publication">Date de publication</label>
        <input type="date" class="form-control" id="date_publication" name="date_publication" value="{{ old('date_publication', $livre->date_publication) }}">
    </div>
    <div class="form-group">
        <label for="prix">Prix</label>
        <input type="number" step="0.01" class="form-control" id="prix" name="prix" value="{{ old('prix', $livre->prix) }}">
    </div>
    <div class="form-group">
        <label for="auteur_id">Auteur</label>
        <select name="auteur_id" id="auteur_id" class="form-control">
            @foreach ($auteurs as $auteur)
                <option value="{{ $auteur->id }}" {{ $auteur->id === $livre->auteur_id ? 'selected' : '' }}>{{ $auteur->nom }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>

@endsection
