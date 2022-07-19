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

                        <h6>Tanggal Keluar : <?php echo e($barang_keluars->tgl_keluar); ?></h6>
                        <h6>Nama Pelanggan : <?php echo e($pelanggans->name); ?></h6>
                        <h6>No. Telp : <?php echo e($pelanggans->no_hp); ?></h6>
                        <h6>Alamat : <?php echo e($pelanggans->alamat); ?></h6>


                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    
                                    <th scope="col">Kode Barang</th>
                                    <th scope="col">Nama Barang</th>
                                    <th scope="col">Harga Barang</th>

                                </tr>
                            </thead>
                            <tbody>

                                <tr>
                                    
                                    <td><?php echo e($barangs->kode); ?></td>
                                    <td><?php echo e($barangs->nama); ?></td>
                                    <td><?php echo e($barangs->harga); ?></td>
                                </tr>


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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory_TB\resources\views/content/barang_keluar/detail_barang_keluar.blade.php ENDPATH**/ ?>