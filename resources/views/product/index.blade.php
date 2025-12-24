@extends('layouts.app')

@section('title', 'Proizvodi')

@section('content')
<div class="container-fluid shop-page py-4">

    <h1 class="mb-4 fw-semibold">Prikaz svih proizvoda</h1>

    <div class="row g-4">
        @forelse ($products as $product)
            <div class="col-xl-3 col-lg-4 col-md-6">
                <div class="card product-card h-100 border-0">

                    <img 
                        src="https://static.vecteezy.com/system/resources/thumbnails/048/910/778/small/default-image-missing-placeholder-free-vector.jpg"
                        class="card-img-top product-img"
                        alt="{{ $product->name }}"
                    >

                    <div class="card-body d-flex flex-column">
                        <h5 class="card-title mb-2">{{ $product->name }}</h5>

                        <p class="card-text small text-muted mb-2">
                            {{ Str::limit($product->description, 70) }}
                        </p>

                        <p class="fw-bold mb-3">
                            {{ $product->price }} RSD
                        </p>

                        <div class="mt-auto d-flex justify-content-between">
                            <form action="{{ url('/cart/add/'.$product->id) }}" method="POST">
                                @csrf
                                <button type="submit" class="btn btn-dark btn-sm">
                                    Dodaj
                                </button>
                            </form>

                            <a href="{{ route('products.show', $product->id) }}" 
                               class="btn btn-outline-dark btn-sm">
                                Detalji
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        @empty
            <p>Nema proizvoda za prikaz.</p>
        @endforelse
    </div>

</div>
@endsection
