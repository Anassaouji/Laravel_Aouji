@extends('layouts.app')

@section('content')
<h1>Liste des livres</h1>
<a href="{{ route('articles.create') }}" class="btn btn-sm btn-success">create</a>
<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Stock</th>
            <th>Prix</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($articles as $article)
        <tr>
            <td>{{ $article->name }}</td>
            <td>{{ $article->description }}</td>
            <td>{{ $article->stock }}</td>
            <td>{{ $article->prix }}</td>
            <td>
                <a href="{{ route('articles.show', $article) }}" class="btn btn-sm btn-primary">Voir</a>
                <a href="{{ route('articles.edit', $article) }}" class="btn btn-sm btn-warning">Modifier</a>
                <form action="{{route('articles.destroy',$article) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
                {{-- <a href="{{ route('articles.acheter', $article) }}" class="btn btn-sm btn-warning">Acheter</a> --}}
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-end">

</div>
@endsection
