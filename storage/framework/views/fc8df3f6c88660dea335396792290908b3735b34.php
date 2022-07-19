<?php $__env->startSection('supplaier'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Supplaier</h1>
        </div>


        <div class="card-body">
            <a href="/screate" class="btn btn-primary">Tambah Supplaier</a>
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
                        <h4>Stok Supplaier</h4>
                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Telp</th>
                                    <th scope="col">Alamat</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $suppaiers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $S): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($S->name); ?></td>
                                        <td><?php echo e($S->no_hp); ?></td>
                                        <td><?php echo e($S->alamat); ?></td>
                                        <td>
                                            <a href="/edits/<?php echo e($S->id); ?>" class="btn btn-warning">Edit</a>
                                            <a href="hapus/<?php echo e($S->id); ?>"
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\TB_inventory\resources\views/content/supplaier/supplaier.blade.php ENDPATH**/ ?>