@extends('layouts.app')

@section('title', 'Kategorije')

@section('content')
<h1>Lista kategorija</h1>

<a href="{{ route('categories.create') }}" class="btn btn-success mb-3">Nova kategorija</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Naziv</th>
            <th>Opis</th>
            <th>Akcije</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-sm btn-primary">Izmeni</a>
                    <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Obriši</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
