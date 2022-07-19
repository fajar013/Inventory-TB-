<?php $__env->startSection('dcategory'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Kategori</h1>
        </div>


        

        <?php if(session()->has('success')): ?>
            <div class="alert alert-success col-12 col-md-6 col-lg-6">
                <?php echo e(session['success']); ?>

            </div>
        <?php endif; ?>

        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4>Daftar Barang di <?php echo e($category->name); ?></h4>
                    </div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Stok</th>
                                    <th scope="col">Harga Per@</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $b): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($b->kode); ?></td>
                                        <td><?php echo e($b->nama); ?></td>
                                        <td><?php echo e($b->stok); ?></td>
                                        <td><?php echo e($b->harga); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/content/category/detail_category.blade.php ENDPATH**/ ?>