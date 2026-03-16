<!DOCTYPE html>
<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h3>Edit Product</h3>

<form action="/update/{{ $product->id }}" method="POST" enctype="multipart/form-data">

@csrf

<input type="text" name="name" value="{{ $product->name }}" class="form-control mb-3">

<input type="number" name="price" value="{{ $product->price }}" class="form-control mb-3">

<input type="text" name="category" value="{{ $product->category }}" class="form-control mb-3">

<input type="file" name="image" class="form-control mb-3">

<button class="btn btn-primary">Update</button>

</form>

</div>

</body>

</html>
