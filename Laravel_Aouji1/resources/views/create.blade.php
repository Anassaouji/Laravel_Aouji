@extends('layouts.app')

@section('content')
<h1>Nouveau livre</h1>

<form action="{{ route('books.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Titre</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
    </div>
    <div class="form-group">
        <label for="publication_date">Date de publication</label>
        <input type="date" class="form-control" id="publication_date" name="publication_date" value="{{ old('publication_date') }}">
    </div>
    <div class="form-group">
        <label for="number_of_pages">Nombre de pages</label>
        <input type="number" class="form-control" id="number_of_pages" name="number_of_pages" value="{{ old('number_of_pages') }}">
    </div>
    <div class="form-group">
        <label for="publisher">Éditeur</label>
        <input type="text" class="form-control" id="publisher" name="publisher" value="{{ old('publisher') }}">
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea class="form-control" id="description" name="description" rows="3">{{ old('description') }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Créer</button>
</form>
@endsection
