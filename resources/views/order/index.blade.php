@extends('layouts.app')

@section('title', 'Sve narudžbine')

@section('content')
<h1>Lista narudžbina</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Korisnik</th>
            <th>Ukupna cena</th>
            <th>Status</th>
            <th>Akcije</th>
        </tr>
    </thead>
    <tbody>
        @foreach($orders as $order)
            <tr>
                <td>{{ $order->id }}</td>
                <td>{{ $order->user_id }}</td>
                <td>{{ $order->total_price }}</td>
                <td>{{ $order->status }}</td>
                <td>
                    <a href="{{ route('orders.show', $order->id) }}" class="btn btn-sm btn-secondary">Detalji</a>
                    <a href="{{ route('orders.edit', $order->id) }}" class="btn btn-sm btn-primary">Izmeni</a>
                    <form action="{{ route('orders.destroy', $order->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger">Obriši</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
