<h1>Add New Product</h1>
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="title" placeholder="Title">
    <textarea name="description" placeholder="Description"></textarea>
    <input type="text" name="price" placeholder="Price">
    <input type="file" name="image">
    <button type="submit">Save Product</button>
</form>
