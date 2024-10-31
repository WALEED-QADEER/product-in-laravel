<!-- Product Listing -->
<h1>Product List</h1>
<a href="{{ route('products.create') }}" style="margin-bottom: 10px; display: inline-block;">Add New Product</a>

<table border="1" cellpadding="10" cellspacing="0" width="100%">
    <thead>
        <tr>
            <th>Title</th>
            <th>Price</th>
            <th>Image</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
            <tr>
                <td>{{ $product->title }}</td>
                <td>${{ $product->price }}</td>
                <td>
                    @if($product->image)
                        <img src="{{ asset('storage/' . $product->image) }}" alt="Image" width="100">
                    @else
                        No Image
                    @endif
                </td>
                <td>
                    <a href="{{ route('products.show', $product) }}">View</a> |
                    <a href="{{ route('products.edit', $product) }}">Edit</a> |
                    <form action="{{ route('products.destroy', $product) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
