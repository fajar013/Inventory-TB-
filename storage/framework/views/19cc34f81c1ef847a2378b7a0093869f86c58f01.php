<?php $__env->startSection('tambah_barangk'); ?>
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
                <form action="/keluar/store" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-header">
                        <h4>Tambah Barang Keluar</h4>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <label>Tgl keluar Barang</label>
                            <input type="date" class="form-control" name="tgl_keluar" placeholder="tgl_keluar Barang . .">
                            <?php if($errors->has('tgl_keluar')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('tgl_keluar')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="pelanggan" class="form-label">pelanggan</label>
                            <select class="form-control "name="pelanggan_id">
                                <?php $__currentLoopData = $pelanggans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pelanggan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(old('pelanggan_id') == $pelanggan->id): ?>
                                        <option value="<?php echo e($pelanggan->id); ?>" selected><?php echo e($pelanggan->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($pelanggan->id); ?>"><?php echo e($pelanggan->name); ?></option>
                                    <?php endif; ?>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Pilih Barang</label>
                        <div class="selectgroup selectgroup-pills">
                            <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $barang): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <label class="selectgroup-item">
                                <input type="checkbox" name="barang_id" value="<?php echo e($barang->id); ?>" class="selectgroup-input" >
                                <span class="selectgroup-button"><?php echo e($barang->nama); ?></span>
                                </label>

                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                        </div>
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/form/tambah_barangk.blade.php ENDPATH**/ ?>