@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <h1>Welcome to the Home Page</h1>
    <a href="{{ route('products.index') }}" class="btn btn-primary">View Products List</a>
    <a href="{{ route('products.create') }}" class="btn btn-success">Add New Product</a>
@endsection
