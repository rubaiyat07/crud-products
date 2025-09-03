@extends('layouts.app')

@section('content')
  <h1>{{ $product->name }}</h1>
  <p><strong>Brand:</strong> {{ $product->brand ?? 'N/A' }}</p>
  <p><strong>Price:</strong> ${{ $product->price }}</p>
  <p><strong>Quantity:</strong> {{ $product->quantity }}</p>

  @if($product->product_image)
    <p><img src="{{ asset('storage/'.$product->product_image) }}" style="max-width:200px; border-radius:8px; border:1px solid #ccc;"></p>
  @endif

  <a href="{{ route('products.edit',$product) }}" class="btn btn-primary">Edit</a>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Back</a>
@endsection
