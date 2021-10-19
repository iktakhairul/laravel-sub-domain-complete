<?php $__env->startSection('title', "Products" ); ?>

<?php $__env->startSection('content'); ?>
    <section class="ml-5content-header">
      <h1><i class="fa fa-product-hunt"></i> Create Product
        <small></small>
      </h1>
        <hr>
      <ol class="breadcrumb ml-5">
        <li><a href="<?php echo e(route('products.index', ['subdomain' => $subdomain])); ?>"><i class="fa fa-building"></i> Products </a></li>
        <li class="active"><i class="fa fa-product-hunt"></i>Create Product </li>
      </ol>
    </section>
  <hr>
    <br>
    <section class="content container-fluid ml-5">
        <div class="panel-body">
        <?php echo e(Form::open(array('route' => ['products.store','subdomain' => $subdomain],'method'=>'POST', 'class' => 'form-horizontal'))); ?>

          <div class="form-group <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
            <label for="product" class="col-md-3">Name</label>
            <div class="col-md-9">
              <input type="text" name="name" class="form-control" style="width: 350px;">

                <?php if($errors->has('quantity')): ?>
                    <div class="text-red"><?php echo e($errors->first('name')); ?></div>
                <?php endif; ?>
            </div>
          </div>
          <div class="form-group <?php if($errors->has('quantity')): ?> has-error <?php endif; ?>">
          <label for="price" class="col-md-3">Quantity</label>
              <div class="col-md-9">
              <input type="text" name="quantity" class="form-control" style="width: 350px;">
                  <?php if($errors->has('quantity')): ?>
                      <div class="text-red"><?php echo e($errors->first('quantity')); ?></div>
                  <?php endif; ?>
              </div>
          </div>
            <div class="form-group <?php if($errors->has('price')): ?> has-error <?php endif; ?>">
                <label for="price" class="col-md-3">Price</label>
                <div class="col-md-9">
                    <input type="text" name="price" class="form-control" style="width: 350px;">
                    <?php if($errors->has('price')): ?>
                        <div class="text-red"><?php echo e($errors->first('price')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
          <div class="form-group col-md-8" style="margin-left: -55px">
              <center>
              <a href="<?php echo e(route('products.index',['subdomain' => $subdomain])); ?>" class="btn bg-maroon">Back</a>
              <input type="submit" value="Create" class="btn btn-success">
              </center>
          </div>
        <?php echo e(Form::close()); ?>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/iktakhairul/Desktop/projects/sub-domain/resources/views/products/create.blade.php ENDPATH**/ ?>