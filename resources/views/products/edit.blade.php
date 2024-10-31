@extends('layouts.app')

@section('title', 'Edit Product')

@section('header', 'Edit Product')

@section('content')
    <form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data" class="product-form">
        @csrf
        @method('PUT')
        
        <div class="form-group">
            <input type="text" name="title" value="{{ $product->title }}" placeholder="Title" required>
        </div>
        
        <div class="form-group">
            <textarea name="description" placeholder="Description" required>{{ $product->description }}</textarea>
        </div>
        
        <div class="form-group">
            <input type="text" name="price" value="{{ $product->price }}" placeholder="Price" required>
        </div>
        
        <div class="form-group">
            <input type="file" name="image">
        </div>
        
        <button type="submit" class="submit-button">Update Product</button>
    </form>
@endsection
