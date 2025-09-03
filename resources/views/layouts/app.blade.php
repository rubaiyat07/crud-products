<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>Product CRUD</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    body { max-width: 1000px; margin: 2rem auto; font-family: Arial, sans-serif; color:#333; background:#f9fafb; }
    nav { margin-bottom: 1.5rem; }
    nav a { margin-right: 1rem; text-decoration: none; color: #2563eb; font-weight: bold; }
    h1 { color: #111827; margin-bottom: 1rem; }
    table { width:100%; border-collapse: collapse; margin-top: 1rem; background:#fff; box-shadow:0 2px 4px rgba(0,0,0,0.05); }
    th, td { border:1px solid #e5e7eb; padding: 0.6rem; text-align:left; }
    th { background:#f3f4f6; }
    tr:nth-child(even) { background:#f9fafb; }
    button, .btn { padding:0.4rem 0.8rem; border:none; border-radius:4px; cursor:pointer; text-decoration:none; }
    .btn-primary { background:#2563eb; color:#fff; }
    .btn-primary:hover { background:#1d4ed8; }
    .btn-danger { background:#dc2626; color:#fff; }
    .btn-danger:hover { background:#b91c1c; }
    .btn-secondary { background:#6b7280; color:#fff; }
    .btn-secondary:hover { background:#4b5563; }
    .flash { background:#d1fae5; border:1px solid #10b981; padding:0.5rem 1rem; border-radius:6px; margin-bottom:1rem; }
    form { display:inline; }
    input, textarea, select { width:100%; padding:0.5rem; margin-top:0.2rem; border:1px solid #ccc; border-radius:4px; }
    label { font-weight:bold; display:block; margin-top:0.8rem; }
    .thumbnail { width:60px; height:60px; object-fit:cover; border-radius:6px; border:1px solid #ddd; }
  </style>
</head>
<body>
  <nav>
    <a href="{{ route('products.index') }}">Products</a>
    <a href="{{ route('products.create') }}">+ Add Product</a>
  </nav>

  @if(session('success'))
    <div class="flash">{{ session('success') }}</div>
  @endif

  @yield('content')
</body>
</html>
