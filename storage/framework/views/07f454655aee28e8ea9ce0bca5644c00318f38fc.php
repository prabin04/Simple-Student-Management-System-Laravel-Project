<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design for Bootstrap</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link href="<?php echo e(asset('public/test/css/bootstrap.min.css')); ?>" rel="stylesheet" >
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="<?php echo e(asset('public/test/css/mdb.min.css')); ?>">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="<?php echo e(asset('public/test/css/style.css')); ?>">
</head>
<body>

  <!-- Start your project here-->  
    <?php echo $__env->make('layout.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <?php echo $__env->yieldContent('content'); ?>

    <?php echo $__env->make('layout.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
  <!-- End your project here-->

  <!-- jQuery -->
  <script type="text/javascript" src="<?php echo e(asset('public/test/js/jquery.min.js')); ?>"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="<?php echo e(asset('public/test/js/popper.min.js')); ?>"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="<?php echo e(asset('public/test/js/bootstrap.min.js')); ?>"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="<?php echo e(asset('public/test/js/mdb.min.js')); ?>"></script>
  <!-- Your custom scripts (optional) -->
  <script type="text/javascript"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\lcrud\lblog\resources\views/layout/main.blade.php ENDPATH**/ ?>