<?php $__env->startSection('tambah_barang'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Barang</h1>
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
                <form action="/masuk/store" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-header">
                        <h4>Tambah Barang</h4>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <label>Tgl Masuk Barang</label>
                            <input type="date" class="form-control" name="tgl_masuk" placeholder="tgl_masuk Barang . .">
                            <?php if($errors->has('tgl_masuk')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('tgl_masuk')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="supplaier" class="form-label">Supplaier</label>
                            <select class="form-control "name="supplaier_id">
                                <?php $__currentLoopData = $suppaiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $supplaier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(old('supplaier_id') == $supplaier->id): ?>
                                        <option value="<?php echo e($supplaier->id); ?>" selected><?php echo e($supplaier->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($supplaier->id); ?>"><?php echo e($supplaier->name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/form/tambah_barangm.blade.php ENDPATH**/ ?>