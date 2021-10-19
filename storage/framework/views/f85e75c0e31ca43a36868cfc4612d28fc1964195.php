<?php $__env->startSection('title', "Users" ); ?>

<?php $__env->startSection('content'); ?>
    <section class="ml-5 content-header">
      <h1>Edit User <?php echo e($user->name); ?></h1>
        <hr>
        <br>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(route('users.index')); ?>"><i class="fa fa-users"></i> Users </a></li>
        <li class="active"><i class="fa fa-user"></i>. Edit User</li>
      </ol>
    </section>
    <br>
    <!-- Main content -->
    <section class="ml-5 content container-fluid">
        <div class="panel-body">
        <?php echo Form::model($user, ['method' => 'PATCH','route' => ['users.update', $user->id], 'class' => 'form-horizontal']); ?>

            <input type="text" name="id" class="hide form-control" value="<?php echo e($user->id); ?>" required>
            <div class="form-group <?php if($errors->has('name')): ?> has-error <?php endif; ?>">
                <label for="product" class="col-md-3">Name</label>
                <div class="col-md-9">
                    <input type="text" name="name" class="form-control" style="width: 350px;" value="<?php echo e($user->name ?? old('name')); ?>">
                    <?php if($errors->has('name')): ?>
                        <div class="text-red"><?php echo e($errors->first('name')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group <?php if($errors->has('email')): ?> has-error <?php endif; ?>">
                <label for="email" class="col-md-3">Email</label>
                <div class="col-md-9">
                    <input type="text" name="email" class="form-control" style="width: 350px;" value="<?php echo e($user->email ?? old('email')); ?>">
                    <?php if($errors->has('email')): ?>
                        <div class="text-red"><?php echo e($errors->first('email')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group <?php if($errors->has('role')): ?> has-error <?php endif; ?>">
                <label for="email" class="col-md-3">Role</label>
                <div class="col-md-9">
                    <input type="text" name="role" class="form-control" style="width: 350px;" value="<?php echo e($user->role ?? old('role')); ?>">
                    <?php if($errors->has('role')): ?>
                        <div class="text-red"><?php echo e($errors->first('role')); ?></div>
                    <?php endif; ?>
                </div>
            </div>
            <div class="form-group col-md-8" style="margin-left: -55px">
                <center>
                <a href="<?php echo e(route('users.index')); ?>" class="btn bg-maroon">Back</a>
                <input type="submit" value="Update" class="btn btn-success">
                </center>
            </div>
            <?php echo e(Form::close()); ?>

            </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/iktakhairul/Desktop/projects/sub-domain/resources/views/users/edit.blade.php ENDPATH**/ ?>