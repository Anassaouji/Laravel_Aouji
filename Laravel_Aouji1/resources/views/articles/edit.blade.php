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

<form action="{{ route('articles.update', $article) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" id="name" name="name" value="{{( $article->name) }}">
    </div>
    <div class="form-group">
        <label for="publication_date">Description</label>
        <input type="text" class="form-control" id="description" name="description" value="{{ ($article->description) }}">
    </div>
    <div class="form-group">
        <label for="number_of_pages">Stock</label>
        <input type="number" class="form-control" id="stock" name="stock" value="{{ ($article->stock) }}">
    </div>
    <div class="form-group">
        <label for="publisher">Prix</label>
        <input type="text" class="form-control" id="prix" name="prix" value="{{ ($article->prix) }}">
    </div>
    <button type="submit" class="btn btn-primary">Modifier</button>
</form>
@endsection
