

<?php $__env->startSection('content'); ?>
  <h1>Edit Product</h1>
  <form action="<?php echo e(route('products.update',$product)); ?>" method="POST" enctype="multipart/form-data">
    <?php echo method_field('PUT'); ?>
    <?php echo $__env->make('products._form',['buttonText'=>'Update'], \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\Web_Dev\Git_Demo\crud-products\resources\views/products/edit.blade.php ENDPATH**/ ?>