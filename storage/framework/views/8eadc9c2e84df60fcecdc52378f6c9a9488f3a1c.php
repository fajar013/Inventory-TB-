<?php $__env->startSection('tambah_supplaier'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Supplaier</h1>
        </div>

        <div>
            <div class="card">
                
                <?php if(count($errors) > 0): ?>
                    <div class="alert alert-danger">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>
                <form action="/supplaier/store" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-header">
                        <h4>Tambah Supplaier</h4>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label>Nama Supplaier</label>
                            <input type="text" class="form-control" name="name" placeholder="Nama Supplaier ..">
                            <?php if($errors->has('name')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('name')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control" name="alamat" placeholder="Alamat ..">
                            <?php if($errors->has('alamat')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('alamat')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>No Telp</label>
                            <input type="text" class="form-control" name="no_hp" placeholder="No. Telp Supplaier ..">
                            <?php if($errors->has('no_hp')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('no_hp')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="card-footer
                                text-right">
                        <input class="btn btn-primary" type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory_TB\resources\views/form/tambah_supplaier.blade.php ENDPATH**/ ?>