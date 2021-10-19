<?php $__env->startSection('title', "ENT-Ticketing-BS | Super Admin - Produk - Tambah" ); ?>

<?php $__env->startSection('content'); ?>
  <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Tambah Produk Bengkel
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="<?php echo e(route('request.index')); ?>"><i class="fa fa-building"></i> Request </a></li>
        <li class="active">Tambah request </li>
      </ol>
    </section>
    <br>  
    <!-- Main content -->
    <section class="content container-fluid">
        <div class="panel-body">
          <?php echo e(Form::open(array('route' => 'request.store','method'=>'POST', 'class' => 'form-horizontal'))); ?>

          <div class="form-group <?php if($errors->has('nama')): ?> has-error <?php endif; ?>">
                <label for="product" class="col-md-3">Nama</label>
                <div class="col-md-9">
                 <input type="text" name="nama" class="form-control">
      
                    <?php if($errors->has('nama')): ?>
                        <div class="text-red"><?php echo e($errors->first('nama')); ?></div>
                    <?php endif; ?>
                </div>
            </div>

           
           
            <div class="form-group">
                <center>
                <a href="<?php echo e(route('request.index')); ?>" class="btn bg-maroon">Batal</a>
                <input type="submit" value="Tambah Request" class="btn btn-success">
                </center>
            </div>
            <?php echo e(Form::close()); ?>

            </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>
 
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/iktakhairul/Desktop/projects/sub-domain/resources/views/request/create.blade.php ENDPATH**/ ?>