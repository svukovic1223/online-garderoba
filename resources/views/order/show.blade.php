@extends('layouts.app')

@section('title', 'Detalji narudžbine')

@section('content')
<h1>Detalji narudžbine #{{ $order->id }}</h1>

<p><strong>Korisnik:</strong> {{ $order->user_id }}</p>
<p><strong>Ukupna cena:</strong> {{ $order->total_price }}</p>
<p><strong>Status:</strong> {{ $order->status }}</p>

<a href="{{ route('orders.index') }}" class="btn btn-secondary">Nazad na listu</a>
@endsection
