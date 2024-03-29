@extends('layouts.app')

@section('content')
<h1>Modifier le livre</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('books.update', $book) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $book->title) }}">
    </div>
    <div class="form-group">
        <label for="publication_date">Date de publication</label>
        <input type="date" class="form-control" id="publication_date" name="publication_date" value="{{ old('publication_date', $book->publication_date) }}">
    </div>
    <div class="form-group">
        <label for="number_of_pages">Nombre de pages</label>
        <input type="number" class="form-control" id="number_of_pages" name="number_of_pages" value="{{ old('number_of_pages', $book->number_of_pages) }}">
    </div>
    <div class="form-group">
        <label for="publisher">Éditeur</label>
        <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher', $book->publisher) }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description', $book->description) }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
