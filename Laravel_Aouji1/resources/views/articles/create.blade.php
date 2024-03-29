@extends('layouts.app')

@section('content')
<h1>Nouveau livre</h1>

<form action="{{ route('articles.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="title">Name</label>
        <input type="text" class="form-control" id="name" name="name">
    </div>
    <div class="form-group">
        <label for="publication_date">Description</label>
        <input type="text" class="form-control" id="description" name="description" >
    </div>
    <div class="form-group">
        <label for="number_of_pages">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock">
    </div>
    <div class="form-group">
        <label for="publisher">Prix</label>
        <input type="text" class="form-control" id="prix" name="prix">
    </div>

    <button type="submit" class="btn btn-primary">Créer</button>
</form>
@endsection
