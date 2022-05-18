<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo e($title); ?></title>

    <!-- Google Fonts -->
    <link href="<?php echo e(asset('css/fontgoogle.css')); ?>"
        rel="stylesheet">
    <script src="<?php echo e(asset('dash/js/jquery.js')); ?>"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">
    <script defer src="<?php echo e(asset('dash/js/alpine.js')); ?>"></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/bootstrap.css')); ?>">
</head>
 <body class="d-flex flex-column h-100 auth-page">
      <?php echo e($slot); ?>

</body>
</html>
<?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/layouts/guest.blade.php ENDPATH**/ ?>