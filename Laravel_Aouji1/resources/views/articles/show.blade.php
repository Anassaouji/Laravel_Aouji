@extends('layouts.app')

@section('content')

<p><strong>Name :</strong> {{ $article->name }}</p>
<p><strong>Description :</strong> {{ $article->description }}</p>
<p><strong>Stock :</strong> {{ $article->stock }}</p>
<p><strong>Prix :</strong></p>{{ $article->prix }}

<a href="{{ route('articles.edit', $article) }}" class="btn btn-warning">Modifier</a>
<form action="{{ route('articles.destroy', $article) }}" method="POST" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
@endsection
