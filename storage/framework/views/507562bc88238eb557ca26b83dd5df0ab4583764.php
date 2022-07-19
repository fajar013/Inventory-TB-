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
                <form action="/barang/store" method="post">
                    <?php echo e(csrf_field()); ?>

                    <div class="card-header">
                        <h4>Tambah Barang</h4>
                    </div>


                    <div class="card-body">
                        <div class="form-group">
                            <label>Kode Barang</label>
                            <input type="text" class="form-control" name="kode" placeholder="Kode Barang . .">
                            <?php if($errors->has('kode')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('kode')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input type="text" class="form-control" name="nama" placeholder="Nama Barang ..">
                            <?php if($errors->has('nama')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('nama')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Stok</label>
                            <input type="text" class="form-control" name="stok" placeholder="Jumlah Stok ..">
                            <?php if($errors->has('stok')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('stok')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label>Harga</label>
                            <input type="text" class="form-control" name="harga" placeholder="Harga Barang per@ ..">
                            <?php if($errors->has('harga')): ?>
                                <div class="text-danger">
                                    <?php echo e($errors->first('harga')); ?>

                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="form-group">
                            <label for="category">Kategori</label>
                            <select class="form-control "name="category_id">
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <?php if(old('category_id') == $category->id): ?>
                                        <option value="<?php echo e($category->id); ?>" selected><?php echo e($category->name); ?></option>
                                    <?php else: ?>
                                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory_TB\resources\views/form/tambah_barang.blade.php ENDPATH**/ ?>