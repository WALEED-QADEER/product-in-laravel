@extends('layouts.app')

@section('title', 'Product Listing')

@section('content')
<div class="back-button">
    <a href="javascript:history.back()" class="back-link">← Back</a>
</div>
<div class="product-list-container">
    <h1>Our Products</h1>
    <div class="product-grid">
        @foreach($products as $index => $product)
            <div class="product-card @if($index % 2 == 0) left @else right @endif">
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->title }}" class="product-image">
                @else
                    <div class="no-image">No Image Available</div>
                @endif
                <div class="product-details">
                    <h3 class="product-title">{{ $product->title }}</h3>
                    <p class="product-price">${{ $product->price }}</p>
                    <p class="product-description">{{ Str::limit($product->description, 100) }}</p>
                    <a href="{{ route('products.show', $product) }}" class="btn btn-view">View Details</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
