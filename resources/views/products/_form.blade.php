@csrf

<div class="mb-3">
  <label for="name" class="form-label">Name</label>
  <input type="text" id="name" name="name" 
         value="{{ old('name', $product->name ?? '') }}" 
         class="form-control @error('name') is-invalid @enderror">
  @error('name') 
    <div class="invalid-feedback">{{ $message }}</div> 
  @enderror
</div>

<div class="mb-3">
  <label for="price" class="form-label">Price</label>
  <input type="number" step="0.01" id="price" name="price" 
         value="{{ old('price', $product->price ?? '') }}" 
         class="form-control @error('price') is-invalid @enderror">
  @error('price') 
    <div class="invalid-feedback">{{ $message }}</div> 
  @enderror
</div>

<div class="mb-3">
  <label for="quantity" class="form-label">Quantity</label>
  <input type="number" id="quantity" name="quantity" 
         value="{{ old('quantity', $product->quantity ?? '') }}" 
         class="form-control @error('quantity') is-invalid @enderror">
  @error('quantity') 
    <div class="invalid-feedback">{{ $message }}</div> 
  @enderror
</div>

<div class="mb-3">
  <label for="brand" class="form-label">Brand</label>
  <input type="text" id="brand" name="brand" 
         value="{{ old('brand', $product->brand ?? '') }}" 
         class="form-control @error('brand') is-invalid @enderror">
  @error('brand') 
    <div class="invalid-feedback">{{ $message }}</div> 
  @enderror
</div>

<div class="mb-3">
  <label for="product_image" class="form-label">Product Image</label>
  <input type="file" id="product_image" name="product_image" 
         class="form-control @error('product_image') is-invalid @enderror">
  @if(!empty($product->product_image))
    <p class="mt-2">Current: 
      <img src="{{ asset('storage/'.$product->product_image) }}" 
           class="img-thumbnail" width="100">
    </p>
  @endif
  @error('product_image') 
    <div class="invalid-feedback">{{ $message }}</div> 
  @enderror
</div>

<div class="mt-3">
  <button type="submit" class="btn btn-primary">{{ $buttonText }}</button>
  <a href="{{ route('products.index') }}" class="btn btn-secondary">Cancel</a>
</div>
