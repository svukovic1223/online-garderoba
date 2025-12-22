<!-- {{--
    @extends('layouts.app')

    @section('content')
        product.index template
    @endsection
--}} -->
<h1>Proizvodi</h1>

@foreach ($products as $product)
    <p>{{ $product->name }}</p>
@endforeach
