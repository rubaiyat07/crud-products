@extends('layouts.app')

@section('content')
  <h1>Edit Product</h1>
  <form action="{{ route('products.update',$product) }}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @include('products._form',['buttonText'=>'Update'])
  </form>
@endsection
