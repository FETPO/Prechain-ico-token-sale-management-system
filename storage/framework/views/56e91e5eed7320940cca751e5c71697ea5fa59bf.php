<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<script type="text/javascript" src="<?php echo e(asset('dash/js/stripe.js')); ?>"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($settings->site_name); ?> | <?php echo e($title); ?></title>
    <link rel="icon" href="<?php echo e(asset('storage/app/public/'. $settings->favicon)); ?>" type="image/png"/>
	
	<?php $__env->startSection('styles'); ?>
			<!-- Fonts and icons -->
		<script src="<?php echo e(asset('dash/js/plugin/webfont/webfont.min.js')); ?>"></script>
	<!-- Sweet Alert -->
		<script src="<?php echo e(asset('dash/js/plugin/sweetalert/sweetalert.min.js')); ?> "></script>
		<!-- CSS Files -->
		<link rel="stylesheet" href="<?php echo e(asset('dash/css/bootstrap.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('dash/css/fonts.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('dash/css/atlantis.min.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('dash/css/customs.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('dash/css/style.css')); ?>">
		<link rel="stylesheet" href="<?php echo e(asset('dash/css/atlantis.min.css')); ?>">
		<link rel="stylesheet" type="text/css" href="<?php echo e(asset('dash/css/datatable.css')); ?>"/>
		<script src="<?php echo e(asset('dash/js/jquery.js')); ?>"></script>
		<script defer src="<?php echo e(asset('dash/js/alpine.js')); ?>"></script>
		<script src="<?php echo e(asset('dash/js/chart.js')); ?>"></script>
	    <?php echo \Livewire\Livewire::styles(); ?>	
	<?php echo $__env->yieldSection(); ?>
	
</head>
<body data-background-color="light">
	<script>
		{<?php echo $settings->livechat; ?>}	
	</script>

    <div id="app">
        <div class="wrapper">
            <?php echo $__env->yieldContent('content'); ?>
				<footer class="footer">
                    <div class="container-fluid">
                        <div class="text-center row copyright text-align-center">
                            <p>All Rights Reserved <?php echo e($settings->site_name); ?> &copy; <?php echo date("Y")?></p>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>
    
	<?php echo \Livewire\Livewire::scripts(); ?>

    <!--   Core JS Files   -->
	<script src="<?php echo e(asset('dash/js/core/jquery.3.2.1.min.js')); ?> "></script>
	<script src="<?php echo e(asset('dash/js/core/popper.min.js')); ?>"></script>
	<script src="<?php echo e(asset('dash/js/core/bootstrap.min.js')); ?> "></script>
	<!-- jQuery UI -->
	<script src="<?php echo e(asset('dash/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js')); ?>"></script>
	<script src="<?php echo e(asset('dash/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js')); ?>"></script>
	<!-- jQuery Scrollbar -->
	<script src="<?php echo e(asset('dash/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js')); ?> "></script>
	<!-- jQuery Sparkline -->
	<script src="<?php echo e(asset('dash/js/plugin/jquery.sparkline/jquery.sparkline.min.js')); ?> "></script>
	<!-- Sweet Alert -->
	<script src="<?php echo e(asset('dash/js/plugin/sweetalert/sweetalert.min.js')); ?> "></script>
	<!-- Bootstrap Notify -->
	<script src="<?php echo e(asset('dash/js/plugin/bootstrap-notify/bootstrap-notify.min.js')); ?> "></script>
	<script type="text/javascript" src="<?php echo e(asset('dash/js/datatable.js')); ?>"></script>
	<script src="<?php echo e(asset('dash/js/customs.js')); ?>"></script>
	<!-- Atlantis JS -->
	<script src="<?php echo e(asset('dash/js/atlantis.min.js')); ?>"></script>
	<script src="<?php echo e(asset('dash/js/atlantis.js')); ?>"></script>

</body>
</html>

<?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/layouts/app.blade.php ENDPATH**/ ?>