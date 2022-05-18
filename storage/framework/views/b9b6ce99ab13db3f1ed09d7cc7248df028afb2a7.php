<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e(config('app.name', 'Laravel')); ?> | <?php echo e($title); ?></title>



    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script src="https://www.google.com/recaptcha/api.js" async defer></script>
     <link rel="stylesheet" href="<?php echo e(asset('css/auth.css')); ?>">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">


</head>
 <body class="d-flex flex-column h-100 auth-page">
      <?php echo e($slot); ?>

     
</body>
</html>
<?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/layouts/guest.blade.php ENDPATH**/ ?>