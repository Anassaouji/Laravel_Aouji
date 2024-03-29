@extends('layouts.app')

@section('content')
<h1>Liste des livres</h1>
<a href="{{ route('books.create') }}" class="btn btn-sm btn-success">create</a>
<table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Date de publication</th>
            <th>Nombre de pages</th>
            <th>Éditeur</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($books as $book)
        <tr>
            <td>{{ $book->title }}</td>
            <td>{{ $book->publication_date }}</td>
            <td>{{ $book->number_of_pages }}</td>
            <td>{{ $book->publisher }}</td>
            <td>
                <a href="{{ route('books.show', $book) }}" class="btn btn-sm btn-primary">Voir</a>
                <a href="{{ route('books.edit', $book) }}" class="btn btn-sm btn-warning">Modifier</a>
                <form action="{{ route('books.destroy', $book) }}" method="POST" style="display: inline-block;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div class="d-flex justify-content-end">

</div>
@endsection
