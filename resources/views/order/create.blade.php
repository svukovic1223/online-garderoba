@extends('layouts.app')

@section('title', 'Nova narudžbina')

@section('content')
<h1>Kreiraj novu narudžbinu</h1>

<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label for="user_id" class="form-label">ID korisnika</label>
        <input type="number" class="form-control" id="user_id" name="user_id" required>
    </div>
    <div class="mb-3">
        <label for="total_price" class="form-label">Ukupna cena</label>
        <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" required>
    </div>
    <div class="mb-3">
        <label for="status" class="form-label">Status</label>
        <input type="text" class="form-control" id="status" name="status" value="created" required>
    </div>
    <button type="submit" class="btn btn-primary">Kreiraj narudžbinu</button>
</form>
@endsection
