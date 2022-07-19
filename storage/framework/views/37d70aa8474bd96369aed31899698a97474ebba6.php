<?php $__env->startSection('dkeluar'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Daftar Barang Keluar</h1>
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

                    <div class="col-6">
                        <?php $__currentLoopData = $barang_keluars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <h6>Tanggal Keluar : <?php echo e($p->tgl_keluar); ?></h6>
                            <h6>Nama Pelanggan : <?php echo e($p->pelanggan->name); ?></h6>
                            <h6>No. Telp : <?php echo e($p->pelanggan->no_hp); ?></h6>
                            <h6>Alamat : <?php echo e($p->pelanggan->alamat); ?></h6>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga Barang</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $barang_keluars; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>

                                        <td><?php echo e($p->barang->kode); ?></td>
                                        <td><?php echo e($p->barang->nama); ?></td>
                                        <td><?php echo e($p->barang->harga); ?></td>
                                    </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <a href="/printbk" class="btn btn-success" target="_blank">Print</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/content/barang_keluar/detail_barang_keluar.blade.php ENDPATH**/ ?>