
@extends('layouts.app')

@section('title', 'Proizvodi')

@section('content')
<h1 class="mb-4">Proizvodi</h1>

<div class="row">
    @forelse ($products as $product)
        <div class="col-md-4 mb-3">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><strong>Cena:</strong> {{ $product->price }}</p>

                    <form action="{{ url('/cart/add/'.$product->id) }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-primary btn-sm">Dodaj u korpu</button>
                    </form>

                    <a href="{{ route('products.show', $product->id) }}" class="btn btn-secondary btn-sm mt-2">Detalji</a>
                </div>
            </div>
        </div>
    @empty
        <p>Nema proizvoda za prikaz.</p>
    @endforelse
</div>
@endsection

