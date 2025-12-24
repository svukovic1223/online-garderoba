@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="row g-5 align-items-start">

    {{-- LEVA STRANA – SLIKA --}}
    <div class="col-lg-6">
        <div class="card border-0">
            <img 
                src="https://static.vecteezy.com/system/resources/thumbnails/048/910/778/small/default-image-missing-placeholder-free-vector.jpg" 
                class="img-fluid rounded"
                alt="{{ $product->name }}"
            >
        </div>
    </div>

    {{-- DESNA STRANA – INFO --}}
    <div class="col-lg-6">
        <div class="card border-0 bg-transparent">
            <div class="card-body p-0">

                <h2 class="mb-3">{{ $product->name }}</h2>

                <p class="text-muted mb-2">
                    {{ $product->description }}
                </p>

                <h4 class="fw-bold mb-3">
                    {{ $product->price }} RSD
                </h4>

                <p class="mb-4">
                    <strong>Na stanju:</strong> {{ $product->stock }}
                </p>

                <form action="{{ url('/cart/add/'.$product->id) }}" method="POST" class="mb-3">
                    @csrf
                    <button type="submit" class="btn btn-dark px-4">
                        Dodaj u korpu
                    </button>
                </form>

                <a href="{{ route('products.index') }}" class="btn btn-outline-dark">
                    Nazad na proizvode
                </a>

            </div>
        </div>
    </div>

</div>
@endsection
