@extends('layouts.app')

@section('title', 'Izmeni kategoriju')

@section('content')
<h1>Izmena kategorije #{{ $category->id }}</h1>

<form action="{{ route('categories.update', $category->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label for="name" class="form-label">Naziv</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Opis</label>
        <textarea class="form-control" id="description" name="description">{{ $category->description }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">Sačuvaj izmene</button>
</form>
@endsection
