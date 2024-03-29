@extends('layouts.app')

@section('content')
<h1>Liste des Livres</h1>
<a href="{{ route('bibliotheques.create') }}" class="btn btn-sm btn-success">create</a>
@if (session('success'))
    <div class="alert alert-success" role="alert">
        {{ session('success') }}
    </div>
@endif

<table class="table table-striped">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Date de publication</th>
            <th>Prix</th>
            <th>Auteur</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($livres as $livre)
        <tr>
            <td>{{ $livre->titre }}</td>
            <td>{{ $livre->date_publication}}</td> <td>{{ $livre->prix }} €</td>
            <td>{{ $livre->auteur->nom }}</td>  <td>
                <a href="{{ route('bibliotheques.show', $livre) }}" class="btn btn-primary">Voir</a>
                <a href="{{ route('bibliotheques.edit', $livre) }}" class="btn btn-warning">Modifier</a>
                <form action="{{ route('bibliotheques.destroy', $livre) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce livre ?')">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
