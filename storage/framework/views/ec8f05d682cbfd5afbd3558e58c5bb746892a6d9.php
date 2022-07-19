<?php $__env->startSection('edit'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Kategori</h1>
        </div>

        <div>
            <div class="card">
                

                <form action="/category/update/<?php echo e($categories->id); ?>" method="post">
                    <?php echo e(csrf_field()); ?>

                    <?php echo e(method_field('PUT')); ?>

                    <div class="card-header">
                        <h4>Edit Barang</h4>
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Kategori .."
                                value="<?php echo e($categories->name); ?>">
                            <?php if($errors->has('name')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('name')); ?>

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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/form/edit_category.blade.php ENDPATH**/ ?>