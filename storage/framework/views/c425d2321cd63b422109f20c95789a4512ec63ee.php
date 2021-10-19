<?php $__env->startSection('title', "Products" ); ?>

<?php $__env->startSection('content'); ?>
    <section class="content-header ml-5">
      <h1>Edit Product
      </h1>
        <hr>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(route('products.index',['subdomain' => $subdomain])); ?>"><i class="fa fa-building"></i> Product </a></li>
        <li class="active">> Edit product </li>
      </ol>
    </section>
  <hr>
    <br>
    <!-- Main content -->
    <section class="content container-fluid ml-5">
        <div class="panel-body">
         <?php echo Form::model($editProduct, ['method' => 'PATCH','route' => ['products.update', $editProduct->id,'subdomain' => $subdomain], 'class' => 'form-horizontal']); ?>

            <div class="form-group <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
                <label for="product" class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" style="width: 350px;" value="<?php echo e($editProduct->name ?? old('name')); ?>">
                    <?php if($errors->has('name')): ?>
                        <div class="text-red"><?php echo e($errors->first('name')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group <?php if($errors->has('quantity')): ?> has-error <?php endif; ?>">
                <label for="quantity" class="col-md-3">Quantity</label>
                <div class="col-md-9">
                    <input type="text" name="quantity" class="form-control" style="width: 350px;" value="<?php echo e($editProduct->quantity ?? old('quantity')); ?>">
                    <?php if($errors->has('quantity')): ?>
                        <div class="text-red"><?php echo e($errors->first('quantity')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group <?php if($errors->has('price')): ?> has-error <?php endif; ?>">
                <label for="price" class="col-md-3">quantity</label>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" style="width: 350px;" value="<?php echo e($editProduct->price ?? old('price')); ?>">
                    <?php if($errors->has('price')): ?>
                        <div class="text-red"><?php echo e($errors->first('price')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-8" style="margin-left: -55px">
            <center>
                <a href="<?php echo e(route('products.index',['subdomain' => $subdomain])); ?>" class="btn bg-maroon">Back</a>
                <input type="submit" value="Update" class="btn btn-success">
            </center>
            </div>
        <?php echo e(Form::close()); ?>

        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/iktakhairul/Desktop/projects/sub-domain/resources/views/products/edit.blade.php ENDPATH**/ ?>