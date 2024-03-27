@extends('layouts.app')

@section('content')
    <h1>All Products</h1>

    @if ($products->count() > 0)
        <ul>
            @foreach ($products as $product)
                <li>{{ $product->name }} - {{ $product->price }}</li>
            @endforeach
        </ul>
    @else
        <p>No products found.</p>
    @endif
@endsection
