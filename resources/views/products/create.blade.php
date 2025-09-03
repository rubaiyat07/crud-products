@extends('layouts.app')

@section('content')
  <h1>Add Product</h1>
  <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @include('products._form',['buttonText'=>'Save'])
  </form>
@endsection
