@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="home-container">
        <h2 class="welcome-message">Welcome to the Home Page</h2>
        <div class="button-containers">
            <a href="{{ route('products.index') }}" class="btn btn-primary">View Products</a>
            <a href="{{ route('products.index') }}" class="btn btn-success">Manage Products</a>
        </div>
    </div>
@endsection
