<!DOCTYPE html>
<html>
<head>

<title>Product Management</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Product Management System</h2>

@if(session('success'))
<div class="alert alert-success">
{{ session('success') }}
</div>
@endif


<form method="GET">

<div class="row mb-3">

<div class="col-md-6">
<input type="text" name="search" value="{{ $search }}" class="form-control" placeholder="Search product">
</div>

<div class="col-md-2">
<button class="btn btn-primary">Search</button>
</div>

</div>

</form>


<form action="/add-product" method="POST" enctype="multipart/form-data">

@csrf

<div class="row">

<div class="col-md-3">
<input type="text" name="name" class="form-control" placeholder="Product Name">
</div>

<div class="col-md-2">
<input type="number" name="price" class="form-control" placeholder="Price">
</div>

<div class="col-md-3">
<input type="text" name="category" class="form-control" placeholder="Category">
</div>

<div class="col-md-2">
<input type="file" name="image" class="form-control">
</div>

<div class="col-md-2">
<button class="btn btn-success">Add</button>
</div>

</div>

</form>


<hr>


<table class="table table-bordered">

<tr>
<th>ID</th>
<th>Image</th>
<th>Name</th>
<th>Price</th>
<th>Category</th>
<th>Action</th>
</tr>


@foreach($products as $product)

<tr>

<td>{{ $product->id }}</td>

<td>
@if($product->image)
<img src="/images/{{ $product->image }}" width="60">
@endif
</td>

<td>{{ $product->name }}</td>

<td>{{ $product->price }}</td>

<td>{{ $product->category }}</td>

<td>

<a href="/edit/{{ $product->id }}" class="btn btn-warning btn-sm">Edit</a>

<a href="/delete/{{ $product->id }}" class="btn btn-danger btn-sm">Delete</a>

</td>

</tr>

@endforeach

</table>

</div>

</body>
</html>