<h1>Edit Product</h1>
<form action="{{ route('products.update', $product) }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="title" value="{{ $product->title }}">
    <textarea name="description">{{ $product->description }}</textarea>
    <input type="text" name="price" value="{{ $product->price }}">
    <input type="file" name="image">
    <button type="submit">Update Product</button>
</form>
