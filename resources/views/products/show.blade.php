@extends('layouts.app')

@section('title', $product->title)

@section('content')
    <div class="back-button">
        <a href="javascript:history.back()" class="back-link">← Back</a>
    </div>

    <div class="product-view">
        <div class="product-image">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="Image">
            @else
                <p>No image available</p>
            @endif
        </div>
        
        <div class="product-details">
            <h1 class="product-title">{{ $product->title }}</h1>
            <p class="product-description">{{ $product->description }}</p>
            <p class="product-price">Price: <span>${{ $product->price }}</span></p>
        </div>
    </div>
@endsection
