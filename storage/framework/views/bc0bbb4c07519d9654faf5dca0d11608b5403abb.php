<?php $__env->startSection('masuk'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Daftar Barang Masuk</h1>
        </div>


        <div class="card-body">
        </div>

        <div class="card-body">
            <a href="/mcreate" class="btn btn-primary">Tambah Barang</a>
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
                        <h4>Barang Masuk</h4>
                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Tanggal Masuk</th>
                                    <th scope="col">Supplaier</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $barang_masuks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $m): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($m->tgl_keluar); ?></td>
                                        <td><?php echo e($m->supplaier->name); ?></td>
                                        <td>
                                            <a href="/detailm/<?php echo e($m->id); ?>" class="btn btn-success">View</a>
                                            <a href="/edit/<?php echo e($m->id); ?>" class="btn btn-warning">Edit</a>
                                            <a href="hapus/<?php echo e($m->id); ?>"
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory_TB\resources\views/content/barang_masuk/barang_masuk.blade.php ENDPATH**/ ?>