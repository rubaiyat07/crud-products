

<?php $__env->startSection('content'); ?>
  <h1>Products</h1>
  <a href="<?php echo e(route('products.create')); ?>" class="btn btn-primary">+ Add Product</a>

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
      <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
        <tr>
          <td><?php echo e($product->id); ?></td>
          <td>
            <?php if($product->product_image): ?>
              <img src="<?php echo e(asset('storage/'.$product->product_image)); ?>" class="thumbnail">
            <?php else: ?>
              —
            <?php endif; ?>
          </td>
          <td><a href="<?php echo e(route('products.show',$product)); ?>"><?php echo e($product->name); ?></a></td>
          <td><?php echo e($product->brand ?? '-'); ?></td>
          <td>$<?php echo e($product->price); ?></td>
          <td><?php echo e($product->quantity); ?></td>
          <td>
            <a href="<?php echo e(route('products.edit',$product)); ?>" class="btn btn-primary">Edit</a>
            <form action="<?php echo e(route('products.destroy',$product)); ?>" method="POST" style="display:inline">
              <?php echo csrf_field(); ?> <?php echo method_field('DELETE'); ?>
              <button class="btn btn-danger" onclick="return confirm('Delete this product?')">Delete</button>
            </form>
          </td>
        </tr>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
        <tr><td colspan="7">No products yet.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>

  <?php echo e($products->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web_Dev\Git_Demo\crud-products\resources\views/products/index.blade.php ENDPATH**/ ?>