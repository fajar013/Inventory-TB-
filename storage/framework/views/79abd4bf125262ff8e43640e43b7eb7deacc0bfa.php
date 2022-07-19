<?php $__env->startSection('barang'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Barang</h1>
        </div>


        <div class="card-body">
            <a href="/barang/create" class="btn btn-primary">Tambah Barang</a>
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
                        <h4>Stok Barang</h4>
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
                                    <th scope="col">Kategori</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $barangs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($p->kode); ?></td>
                                        <td><?php echo e($p->nama); ?></td>
                                        <td><?php echo e($p->stok); ?></td>
                                        <td><?php echo e($p->harga); ?></td>
                                        <td><a href="/kategori"><?php echo e($p->category->name); ?></a></td>
                                        <td>
                                            <a href="/edit/<?php echo e($p->id); ?>" class="btn btn-warning">Edit</a>
                                            <a href="hapus/<?php echo e($p->id); ?>"
                                                onclick="return confirm('Yakin Hapus data?')"
                                                class="btn btn-danger">Hapus</a>
                                        </td>
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/content/barang.blade.php ENDPATH**/ ?>