@extends('layouts.app')

@section('title', 'Add New Product')

@section('header', 'Add New Product')

@section('content')
    <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data" class="product-form">
        @csrf
        <div class="form-group">
            <input type="text" name="title" placeholder="Title" required>
        </div>
        <div class="form-group">
            <textarea name="description" placeholder="Description" required></textarea>
        </div>
        <div class="form-group">
            <input type="text" name="price" placeholder="Price" required>
        </div>
        <div class="form-group">
            <input type="file" name="image">
        </div>
        <button type="submit" class="submit-button">Save Product</button>
    </form>
@endsection
