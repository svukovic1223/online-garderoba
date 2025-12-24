@extends('layouts.app')

@section('title', 'Izmeni kategoriju')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

                <h3 class="mb-4">
                    Izmena kategorije #{{ $category->id }}
                </h3>

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="name" class="form-label">Naziv</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               value="{{ $category->name }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Opis</label>
                        <textarea class="form-control"
                                  id="description"
                                  name="description"
                                  rows="3">{{ $category->description }}</textarea>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('categories.index') }}" class="btn btn-secondary">
                            Nazad
                        </a>

                        <button type="submit" class="btn btn-dark">
                            Sačuvaj izmene
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection
