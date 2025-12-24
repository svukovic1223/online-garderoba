@extends('layouts.app')

@section('title', 'Detalji narudžbine')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

                <h3 class="mb-4">
                    Detalji narudžbine #{{ $order->id }}
                </h3>

                <p><strong>Korisnik:</strong> {{ $order->user_id }}</p>
                <p><strong>Ukupna cena:</strong> {{ $order->total_price }}</p>
                <p><strong>Status:</strong> {{ $order->status }}</p>

                <a href="{{ route('orders.index') }}" class="btn btn-secondary">Nazad na listu</a>
            </div>
        </div>
    </div>
</div>

@endsection
