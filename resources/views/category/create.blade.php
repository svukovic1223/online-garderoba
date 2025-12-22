@extends('layouts.app')

@section('title', 'Nova kategorija')

@section('content')
<h1>Nova kategorija</h1>

<form action="{{ route('categories.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="name" class="form-label">Naziv</label>
        <input type="text" class="form-control" id="name" name="name" required>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Opis</label>
        <textarea class="form-control" id="description" name="description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Sačuvaj</button>
</form>
@endsection
