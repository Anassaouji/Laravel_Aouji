@extends('layouts.app')

@section('content')
<h1>{{ $book->title }}</h1>

<p><strong>Date de publication :</strong> {{ $book->publication_date }}</p>
<p><strong>Nombre de pages :</strong> {{ $book->number_of_pages }}</p>
<p><strong>Éditeur :</strong> {{ $book->publisher }}</p>
<p><strong>Description :</strong></p>
<p>{{ $book->description }}</p>

<a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Modifier</a>
<form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Supprimer</button>
</form>
@endsection
