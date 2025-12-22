@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="row">
    <div class="col-md-6">
        <div class="card mb-3">
            <div class="card-body">
                <h2 class="card-title">{{ $product->name }}</h2>
                <p class="card-text"><strong>Opis:</strong> {{ $product->description }}</p>
                <p class="card-text"><strong>Cena:</strong> {{ $product->price }}</p>
                <p class="card-text"><strong>Na stanju:</strong> {{ $product->stock }}</p>

                <form action="{{ url('/cart/add/'.$product->id) }}" method="POST">
                    @csrf
                    <button type="submit" class="btn btn-primary">Dodaj u korpu</button>
                </form>

                <a href="{{ route('products.index') }}" class="btn btn-secondary mt-2">Nazad na proizvode</a>
            </div>
        </div>
    </div>
</div>
@endsection
