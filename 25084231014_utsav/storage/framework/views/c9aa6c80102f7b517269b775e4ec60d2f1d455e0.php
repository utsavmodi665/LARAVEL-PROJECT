<!DOCTYPE html>
<html>
<head>

<title>Product Management</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="bg-light">

<div class="container mt-5">

<h2 class="mb-4">Product Management System</h2>

<?php if(session('success')): ?>
<div class="alert alert-success">
<?php echo e(session('success')); ?>

</div>
<?php endif; ?>


<form method="GET">

<div class="row mb-3">

<div class="col-md-6">
<input type="text" name="search" value="<?php echo e($search); ?>" class="form-control" placeholder="Search product">
</div>

<div class="col-md-2">
<button class="btn btn-primary">Search</button>
</div>

</div>

</form>


<form action="/add-product" method="POST" enctype="multipart/form-data">

<?php echo csrf_field(); ?>

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


<?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

<tr>

<td><?php echo e($product->id); ?></td>

<td>
<?php if($product->image): ?>
<img src="/images/<?php echo e($product->image); ?>" width="60">
<?php endif; ?>
</td>

<td><?php echo e($product->name); ?></td>

<td><?php echo e($product->price); ?></td>

<td><?php echo e($product->category); ?></td>

<td>

<a href="/edit/<?php echo e($product->id); ?>" class="btn btn-warning btn-sm">Edit</a>

<a href="/delete/<?php echo e($product->id); ?>" class="btn btn-danger btn-sm">Delete</a>

</td>

</tr>

<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

</table>

</div>

</body>
</html><?php /**PATH D:\u14php\product-management\resources\views/products/index.blade.php ENDPATH**/ ?>