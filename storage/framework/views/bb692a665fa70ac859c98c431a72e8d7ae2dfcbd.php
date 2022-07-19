<?php $__env->startSection('keluar'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Daftar Barang Keluar</h1>
        </div>

        <div class="card-body">
            <a href="/kcreate" class="btn btn-primary">Tambah Barang</a>
        </div>

        <div class="card-body">
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
                        <h4>Barang Keluar</h4>
                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal Keluar</th>
                                    <th scope="col">Pelanggan</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $barang_keluars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($p->tgl_keluar); ?></td>
                                        <td><?php echo e($p->pelanggan->name); ?></td>
                                        <td>
                                            <a href="/detailk/<?php echo e($p->pelanggan->id); ?>" class="btn btn-success">preview</a>
                                            <a href="/editk/<?php echo e($p->id); ?>" class="btn btn-warning">Edit</a>
                                            <a href="hapusk/<?php echo e($p->id); ?>"
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory_TB\resources\views/content/barang_keluar/barang_keluar.blade.php ENDPATH**/ ?>