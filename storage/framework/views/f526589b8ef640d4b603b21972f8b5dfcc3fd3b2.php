<?php $__env->startSection('category'); ?>
    <section class="section">
        <div class="section-header">
            <h1>Kategori</h1>
        </div>


        <div class="card-body">
            <a href="/ccreate" class="btn btn-primary">Tambah Kategori</a>
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
                        <h4>Daftar Kategori</h4>
                    </div>



                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $c): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <td><?php echo e($loop->iteration); ?></td>
                                        <td><?php echo e($c->name); ?></td>

                                        <td><a href="/detailc/<?php echo e($c->id); ?>" class="btn btn-primary">Review</a>
                                            <a href="/editc/<?php echo e($c->id); ?>" class="btn btn-warning">Edit</a>
                                            <a href="hapus/<?php echo e($c->id); ?>"
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

<?php echo $__env->make('layouts/main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\inventory_TB\resources\views/content/category/category.blade.php ENDPATH**/ ?>