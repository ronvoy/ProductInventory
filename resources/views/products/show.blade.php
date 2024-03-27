@extends('layouts.app')

@section('content')
    <h1>{{ $product->name }}</h1>
    <p>Description: {{ $product->description }}</p>
    <p>Price: {{ $product->price }}</p>
    @if ($product->image)
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}">
    @else
        <p>No image available.</p>
    @endif
@endsection
