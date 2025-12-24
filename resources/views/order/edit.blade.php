@extends('layouts.app')

@section('title', 'Izmeni narudžbinu')

@section('content')
<div class="row justify-content-center">
    <div class="col-lg-6">

        <div class="card border-0 shadow-sm">
            <div class="card-body p-4">

                <h3 class="mb-4">
                    Izmena narudžbine #{{ $order->id }}
                </h3>

                <form action="{{ route('orders.update', $order->id) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <div class="mb-3">
                        <label for="user_id" class="form-label">ID korisnika</label>
                        <input type="number"
                               class="form-control"
                               id="user_id"
                               name="user_id"
                               value="{{ $order->user_id }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="total_price" class="form-label">Ukupna cena</label>
                        <input type="number"
                               step="0.01"
                               class="form-control"
                               id="total_price"
                               name="total_price"
                               value="{{ $order->total_price }}"
                               required>
                    </div>

                    <div class="mb-3">
                        <label for="status" class="form-label">Status</label>
                        <input type="text"
                               class="form-control"
                               id="status"
                               name="status"
                               value="{{ $order->status }}"
                               required>
                    </div>

                    <div class="d-flex justify-content-between mt-4">
                        <a href="{{ route('orders.index') }}" class="btn btn-secondary">
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
