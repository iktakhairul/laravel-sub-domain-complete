<?php $__env->startSection('title', "Users" ); ?>

<?php $__env->startSection('content'); ?>
    <section class="content-header">
        <h3 class="mt-4"><i class="fa fa-product-hunt"></i> Create User
            <small></small>
        </h3>
        <hr>
        <ol class="breadcrumb ml-5">
            <li><a href="<?php echo e(route('users.index', ['subdomain' => Auth::user()->role])); ?>"><i class="fa fa-users"></i> Users </a></li>
            <li class="active"><i class="fa fa-user"></i>. Create User </li>
        </ol>
    </section>
    <hr>
    <br>
    <section class="content container-fluid ml-5">
        <div class="panel-body">
            <?php echo e(Form::open(array('route' => ['users.store','subdomain' => Auth::user()->role],'method'=>'POST', 'class' => 'form-horizontal'))); ?>

            <div class="form-group <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
                <label for="product" class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" style="width: 350px;">

                    <?php if($errors->has('name')): ?>
                        <div class="text-red"><?php echo e($errors->first('name')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group <?php if($errors->has('email')): ?> has-error <?php endif; ?>">
                <label for="email" class="col-md-3">Email</label>
                <div class="col-md-9">
                    <input type="text" name="email" class="form-control" style="width: 350px;">
                    <?php if($errors->has('email')): ?>
                        <div class="text-red"><?php echo e($errors->first('email')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group <?php if($errors->has('role')): ?> has-error <?php endif; ?>">
                <label for="email" class="col-md-3">Role</label>
                <div class="col-md-9">
                    <input type="text" name="role" class="form-control" style="width: 350px;">
                    <?php if($errors->has('role')): ?>
                        <div class="text-red"><?php echo e($errors->first('role')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-8" style="margin-left: -55px">
                <center>
                    <a href="<?php echo e(route('users.index',['subdomain' => Auth::user()->role])); ?>" class="btn bg-maroon">Back</a>
                    <input type="submit" value="Create" class="btn btn-success">
                </center>
            </div>
        <?php echo e(Form::close()); ?>

    </section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/iktakhairul/Desktop/projects/sub-domain/resources/views/users/create.blade.php ENDPATH**/ ?>