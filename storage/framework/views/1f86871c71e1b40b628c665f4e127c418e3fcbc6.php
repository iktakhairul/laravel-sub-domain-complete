<?php $__env->startSection('title', "Products" ); ?>

<?php $__env->startSection('content'); ?>

    <section class="content-header">
        <h1 class="breadcrumb ml-5">
            <i class="fa fa-procedures"></i>. Products
        </h1>
    </section>
 <hr>
    <br>
     <!-- Main content -->
        <section class="content container-fluid">
            <div class="form-group col-md-12">
                <div class="pull-right">
                    <a href="<?php echo e(route('products.create', ['subdomain' => Auth::user()->role])); ?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Create Products</a>
                </div>
            </div>
            <br>
            <?php if($message = Session::get('success')): ?>
            <div class="col-md-12">
                <div class="alert alert-success">
                    <p><?php echo e($message); ?></p>
                </div>
            </div>
            <?php endif; ?>
            <div class="col-md-12">
            <!-- Horizontal Form -->
            <div class="box box-info">
            <div class="box-body table-responsive">
                <table id="listProdukToko" class="table table-bordered table-stripped responsive">
                    <thead>
                    <tr>
                        <th width="20">No</th>
                        <th>Name </th>
                        <th>Quantity </th>
                        <th>Price </th>
                        <th width="100">Actions</th>
                    </tr>
                    </thead>
                    <tbody id="">
                        <?php if(count($products) > 0): ?>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td><?php echo e($index->name ?? ''); ?></td>
                                <td><?php echo e($index->quantity ?? ''); ?></td>
                                <td><?php echo e($index->price ?? ''); ?></td>
                                <td>
                                <center>
                                   <a href="<?php echo e(route('products.edit',[$index->id ,'subdomain' => Auth::user()->role])); ?>"><button class="btn btn-primary btn-xs" title="Ubah"><i class="fas fa-pencil-alt"></i></button></a>
                                    <?php echo e(Form::open(['method' => 'DELETE','route' => ['products.destroy', $index->id,'subdomain' => Auth::user()->role],'style'=>'display:inline'])); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <button class="btn btn-danger btn-xs" id="delete" onclick="return confirm('Are you sure to delete data of <?php echo e($index->name); ?> ?')"><i class="fa fa-trash"></i></button>
                                    <?php echo e(Form::close()); ?>

                                </center>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">No data found!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                </table>
            </div>
        </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/iktakhairul/Desktop/projects/sub-domain/resources/views/products/index.blade.php ENDPATH**/ ?>