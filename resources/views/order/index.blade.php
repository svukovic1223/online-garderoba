@extends('layouts.app')

@section('title', 'Sve narudžbine')

@section('content')
<div class="d-flex justify-content-between align-items-center mb-4">
    <h3 class="mb-0">Lista narudžbina</h3>

    <a href="{{ route('orders.create') }}" class="btn btn-dark">
        + Nova narudžbina
    </a>
</div>

<div class="card border-0 shadow-sm">
    <div class="card-body p-0">

        <table class="table table-hover mb-0 align-middle">
            <thead class="table-light">
                <tr>
                    <th>ID</th>
                    <th>Korisnik</th>
                    <th>Ukupna cena</th>
                    <th>Status</th>
                    <th class="text-end">Akcije</th>
                </tr>
            </thead>

            <tbody>
                @foreach($orders as $order)
                    <tr>
                        <td>#{{ $order->id }}</td>
                        <td>{{ $order->user_id }}</td>
                        <td>{{ $order->total_price }} RSD</td>
                        <td>
                            <span class="badge bg-secondary">
                                {{ $order->status }}
                            </span>
                        </td>
                        <td class="text-end">

                            <a href="{{ route('orders.show', $order->id) }}"
                               class="btn btn-sm btn-outline-dark">
                                Detalji
                            </a>

                            <a href="{{ route('orders.edit', $order->id) }}"
                               class="btn btn-sm btn-outline-primary">
                                Izmeni
                            </a>

                            <form action="{{ route('orders.destroy', $order->id) }}"
                                  method="POST"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-sm btn-outline-danger"
                                        onclick="return confirm('Obrisati narudžbinu?')">
                                    Obriši
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</div>
@endsection
