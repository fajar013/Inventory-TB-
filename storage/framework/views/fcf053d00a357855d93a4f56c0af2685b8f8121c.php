<div class="row" target="_blank">
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
<?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/content/barang_keluar/cetak_barang_keluar.blade.php ENDPATH**/ ?>