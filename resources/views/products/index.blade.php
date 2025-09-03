@extends('layouts.app')

@section('content')
  <h1>Products</h1>
  <a href="{{ route('products.create') }}" class="btn btn-primary">+ Add Product</a>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Name</th>
        <th>Brand</th>
        <th>Price</th>
        <th>Quantity</th>
        <th>Actions</th>
      </tr>
    </thead>
    <tbody>
      @forelse($products as $product)
        <tr>
          <td>{{ $product->id }}</td>
          <td>
            @if($product->product_image)
              <img src="{{ asset('storage/'.$product->product_image) }}" class="thumbnail">
            @else
              —
            @endif
          </td>
          <td><a href="{{ route('products.show',$product) }}">{{ $product->name }}</a></td>
          <td>{{ $product->brand ?? '-' }}</td>
          <td>${{ $product->price }}</td>
          <td>{{ $product->quantity }}</td>
          <td>
            <a href="{{ route('products.edit',$product) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('products.destroy',$product) }}" method="POST" style="display:inline">
              @csrf @method('DELETE')
              <button class="btn btn-danger" onclick="return confirm('Delete this product?')">Delete</button>
            </form>
          </td>
        </tr>
      @empty
        <tr><td colspan="7">No products yet.</td></tr>
      @endforelse
    </tbody>
  </table>

  {{ $products->links() }}
@endsection
