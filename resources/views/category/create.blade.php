@extends('layouts.app')

@section('title', 'Nova kategorija')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

                <h3 class="mb-4">Kreiranje nove kategorije</h3>

                <form action="{{ route('categories.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Naziv</label>
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Opis</label>
                        <textarea class="form-control"
                                  id="description"
                                  name="description"
                                  rows="3"></textarea>
                    </div>

                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="{{ route('categories.index') }}" class="btn btn-outline-dark">
                            Nazad
                        </a>
                        <button type="submit" class="btn btn-dark">
                            Sačuvaj
                        </button>
                    </div>

                </form>

            </div>
        </div>

    </div>
</div>
@endsection
