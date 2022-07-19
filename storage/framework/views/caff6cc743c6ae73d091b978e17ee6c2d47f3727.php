<?php $__env->startSection('edits'); ?>
    <section class="section">
        <div class="section-header">
            <h1>supplaier</h1>
        </div>

        <div>
            <div class="card">
                

                <form action="/supplaier/update/<?php echo e($suplaiers->id); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <div class="card-header">
                        <h4>Edit supplaier</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Supplaier</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama supplaier .."
                                value="<?php echo e($suplaiers->name); ?>">
                            <?php if($errors->has('name')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('name')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat .."
                                value="<?php echo e($suplaiers->alamat); ?>">
                            <?php if($errors->has('alamat')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('alamat')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="no_hp"
                                placeholder="No_telp Supplaier.."value="<?php echo e($suplaiers->no_hp); ?>">
                            <?php if($errors->has('no_hp')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('no_hp')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer
                                text-right">
                        <input class="btn btn-primary" type="submit" value="Simpan">
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/form/edit_supplaier.blade.php ENDPATH**/ ?>