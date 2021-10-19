<?php $__env->startSection('title', "BukuServis | Produk Bengkel" ); ?>

<?php $__env->startSection('content'); ?>

 <!-- Content Wrapper. Contains page content -->
  
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>Request Domain
            <small></small>
        </h1>
        <ol class="breadcrumb">
            
            <li><i class="fa fa-product-hunt"></i> Request Domain </li>
        </ol>
    </section>
    <br>
     <!-- Main content -->
        <section class="content container-fluid">
            <div class="form-group col-md-12">
                <div class="pull-right">
                    <a href="<?php echo e(route('request.create')); ?>" class="btn btn-success"><i class="fa fa-plus" aria-hidden="true"></i> Tambah Domain</a>
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
                        <th>Nama </th>
                        <th>Role </th>
                        <th width="100">Tindakan</th>
                    </tr>
                    </thead>
                    <tbody id="">
                        <?php if(count($indexs) > 0): ?>
                        <?php $__currentLoopData = $indexs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $index): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($key+1); ?></td>
                                <td><?php echo e($index->nama); ?></td>
                                <td><?php echo e($index->role); ?></td>
                                <td>
                                <center>
                                   <a href="<?php echo e(route('request.edit',$index->id)); ?>"><button class="btn btn-primary btn-xs" title="Ubah"><i class="fas fa-pencil-alt"></i></button></a>
                                    <?php echo e(Form::open(['method' => 'DELETE','route' => ['request.destroy', $index->id],'style'=>'display:inline'])); ?>

                                    <?php echo e(csrf_field()); ?>

                                    <button class="btn btn-danger btn-xs" id="delete" onclick="return confirm('Hapus produk <?php echo e($index->name); ?> dibengkel ini ?')"><i class="fa fa-trash"></i></button>
                                    <?php echo e(Form::close()); ?>

                                </center>
                                </td>
                            </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4">Produk Bengkel tidak ditemukan!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
                </table>
            </div>
        </div>

        </section>

    <!-- /.content -->
  
  <!-- /.content-wrapper -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('additional-js'); ?>
    <script>
     $(document).ready(function() {
        $('#listProdukToko').DataTable( {
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.10.22/i18n/Indonesian.json"
                }
            ,responsive: true
            } );
    } );
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/iktakhairul/Desktop/projects/sub-domain/resources/views/request/index.blade.php ENDPATH**/ ?>