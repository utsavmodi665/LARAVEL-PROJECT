<!DOCTYPE html>
<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<h3>Edit Product</h3>

<form action="/update/<?php echo e($product->id); ?>" method="POST" enctype="multipart/form-data">

<?php echo csrf_field(); ?>

<input type="text" name="name" value="<?php echo e($product->name); ?>" class="form-control mb-3">

<input type="number" name="price" value="<?php echo e($product->price); ?>" class="form-control mb-3">

<input type="text" name="category" value="<?php echo e($product->category); ?>" class="form-control mb-3">

<input type="file" name="image" class="form-control mb-3">

<button class="btn btn-primary">Update</button>

</form>

</div>

</body>

</html><?php /**PATH D:\u14php\product-management\resources\views/products/edit.blade.php ENDPATH**/ ?>