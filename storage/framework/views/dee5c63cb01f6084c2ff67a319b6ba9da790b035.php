<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/components.css">

    <title>TB | <?php echo e($title); ?></title>
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            <div class="navbar-bg"></div>
            <?php echo $__env->make('elementas.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <?php echo $__env->make('elementas.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

            <!-- Main Content -->
            <div class="main-content">
                <?php echo $__env->yieldContent('dashboard'); ?>

                
                <?php echo $__env->yieldContent('barang'); ?>
                <?php echo $__env->yieldContent('edit'); ?>
                <?php echo $__env->yieldContent('tambah_barang'); ?>

                
                <?php echo $__env->yieldContent('masuk'); ?>
                <?php echo $__env->yieldContent('dmasuk'); ?>
                <?php echo $__env->yieldContent('masuk_barang'); ?>

                
                <?php echo $__env->yieldContent('keluar'); ?>
                <?php echo $__env->yieldContent('dkeluar'); ?>
                <?php echo $__env->yieldContent('tambah_barangk'); ?>
                <?php echo $__env->yieldContent('edit_barangk'); ?>
                <?php echo $__env->yieldContent('keluar_barang'); ?>

                
                <?php echo $__env->yieldContent('category'); ?>
                <?php echo $__env->yieldContent('dcategory'); ?>
                <?php echo $__env->yieldContent('editc'); ?>
                <?php echo $__env->yieldContent('tambah_kategori'); ?>


                
                <?php echo $__env->yieldContent('pelanggan'); ?>
                <?php echo $__env->yieldContent('editp'); ?>
                <?php echo $__env->yieldContent('tambah_pelanggan'); ?>

                

                <?php echo $__env->yieldContent('supplaier'); ?>
                <?php echo $__env->yieldContent('edits'); ?>
                <?php echo $__env->yieldContent('tambah_supplaier'); ?>

            </div>
            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2018 <div class="bullet"></div> Design By <a href="https://nauval.in/">Muhamad
                        Nauval Azhar</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="../assets/js/stisla.js"></script>

    <!-- JS Libraies -->

    <!-- Template JS File -->
    <script src="../assets/js/scripts.js"></script>
    <script src="../assets/js/custom.js"></script>



    <!-- Page Specific JS File -->
</body>

</html>
<?php /**PATH C:\xampp\htdocs\inventory_TB\resources\views/layouts/main.blade.php ENDPATH**/ ?>