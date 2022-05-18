<!DOCTYPE html>
<html lang="<?php echo e(app()->getLocale()); ?>">
<head>
	<script type="text/javascript" src="https://js.stripe.com/v3/"></script>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e($settings->site_name); ?> | <?php echo e($title); ?></title>
    <link rel="icon" href="" type="image/png"/>
	
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
		<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/bs4/dt-1.10.25/b-1.7.1/b-colvis-1.7.1/r-2.2.9/sc-2.0.4/sb-1.1.0/sl-1.3.3/datatables.min.css"/>
 
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<script defer src="https://unpkg.com/alpinejs@3.1.0/dist/cdn.min.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/chart.js@3.2.1/dist/chart.min.js"></script>
	<?php echo $__env->yieldSection(); ?>
	<?php echo \Livewire\Livewire::styles(); ?>

	<style>
		 .sk-chase {
  width: 20px;
  height: 20px;
  position: relative;
  animation: sk-chase 2.5s infinite linear both;
}

.sk-chase-dot {
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  top: 0; 
  animation: sk-chase-dot 2.0s infinite ease-in-out both; 
}

.sk-chase-dot:before {
  content: '';
  display: block;
  width: 25%;
  height: 25%;
  background-color: #fff;
  border-radius: 100%;
  animation: sk-chase-dot-before 2.0s infinite ease-in-out both; 
}

.sk-chase-dot:nth-child(1) { animation-delay: -1.1s; }
.sk-chase-dot:nth-child(2) { animation-delay: -1.0s; }
.sk-chase-dot:nth-child(3) { animation-delay: -0.9s; }
.sk-chase-dot:nth-child(4) { animation-delay: -0.8s; }
.sk-chase-dot:nth-child(5) { animation-delay: -0.7s; }
.sk-chase-dot:nth-child(6) { animation-delay: -0.6s; }
.sk-chase-dot:nth-child(1):before { animation-delay: -1.1s; }
.sk-chase-dot:nth-child(2):before { animation-delay: -1.0s; }
.sk-chase-dot:nth-child(3):before { animation-delay: -0.9s; }
.sk-chase-dot:nth-child(4):before { animation-delay: -0.8s; }
.sk-chase-dot:nth-child(5):before { animation-delay: -0.7s; }
.sk-chase-dot:nth-child(6):before { animation-delay: -0.6s; }

@keyframes  sk-chase {
  100% { transform: rotate(360deg); } 
}

@keyframes  sk-chase-dot {
  80%, 100% { transform: rotate(360deg); } 
}

@keyframes  sk-chase-dot-before {
  50% {
    transform: scale(0.4); 
  } 100%, 0% {
    transform: scale(1.0); 
  } 
}

	</style>
</head>
<body data-background-color="light">
    <div id="app">
        <div class="wrapper">
            <?php echo $__env->yieldContent('content'); ?>
				<footer class="footer">
                    <div class="container-fluid">
                        <div class="text-center row copyright text-align-center">
                            <p>All Rights Reserved &copy; <?php echo date("Y")?></p>
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
	<script src="<?php echo e(asset('dash/js/customs.js')); ?>"></script>
	
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
	<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/dt-1.10.25/b-1.7.1/b-colvis-1.7.1/r-2.2.9/sc-2.0.4/sb-1.1.0/sl-1.3.3/datatables.min.js"></script>
	
<script type="text/javascript">
		
function googleTranslateElementInit() {
new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}

(function(){var gtConstEvalStartTime = new Date();function d(b){var a=document.getElementsByTagName("head")[0];a||(a=document.body.parentNode.appendChild(document.createElement("head")));a.appendChild(b)}function _loadJs(b){var a=document.createElement("script");a.type="text/javascript";a.charset="UTF-8";a.src=b;d(a)}function _loadCss(b){var a=document.createElement("link");a.type="text/css";a.rel="stylesheet";a.charset="UTF-8";a.href=b;d(a)}function _isNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)if(!(a=a[b[c]]))return!1;return!0}
function _setupNS(b){b=b.split(".");for(var a=window,c=0;c<b.length;++c)a.hasOwnProperty?a.hasOwnProperty(b[c])?a=a[b[c]]:a=a[b[c]]={}:a=a[b[c]]||(a[b[c]]={});return a}window.addEventListener&&"undefined"==typeof document.readyState&&window.addEventListener("DOMContentLoaded",function(){document.readyState="complete"},!1);
if (_isNS('google.translate.Element')){return}(function(){var c=_setupNS('google.translate._const');c._cest = gtConstEvalStartTime;gtConstEvalStartTime = undefined;c._cl='en';c._cuc='googleTranslateElementInit';c._cac='';c._cam='';c._ctkk=eval('((function(){var a\x3d814543065;var b\x3d2873925779;return 414629+\x27.\x27+(a+b)})())');var h='translate.googleapis.com';var s=(true?'https':window.location.protocol=='https:'?'https':'http')+'://';var b=s+h;c._pah=h;c._pas=s;c._pbi=b+'/translate_static/img/te_bk.gif';c._pci=b+'/translate_static/img/te_ctrl3.gif';c._pli=b+'/translate_static/img/loading.gif';c._plla=h+'/translate_a/l';c._pmi=b+'/translate_static/img/mini_google.png';c._ps=b+'/translate_static/css/translateelement.css';c._puh='translate.google.com';_loadCss(c._ps);_loadJs(b+'/translate_static/js/element/main.js');})();})();

</script>
<script>
	function myFunction() {
		/* Get the text field */
		var copyText = document.getElementById("myInput");
		/* Select the text field */
		copyText.select();
		copyText.setSelectionRange(0, 99999); /* For mobile devices */
		/* Copy the text inside the text field */
		document.execCommand("copy");
		/* Alert the copied text */
		//alert("Copied the text: " + copyText.value);
		swal("Copied", copyText.value, "success");
		}
</script>
	<!-- Atlantis JS -->
	<script src="<?php echo e(asset('dash/js/atlantis.min.js')); ?>"></script>
	<script src="<?php echo e(asset('dash/js/atlantis.js')); ?>"></script>
	<script type="text/javascript">
		var badWords = [ 
			'<!--Start of Tawk.to Script-->',
			'<script type="text/javascript">', 
			'<!--End of Tawk.to Script-->'
					];
		$(':input').on('blur', function(){
			var value = $(this).val();
			$.each(badWords, function(idx, word){
			value = value.replace(word, '');
			});
			$(this).val( value);
		});
	</script>
	 <script>
		$(document).ready( function () {
			$('#ttable').DataTable({
				order: [ [0, 'asc'] ],
			});
		} );
	</script>
	<script>
		$(document).ready( function () {
			$('.UserTable').DataTable({
				order: [ [0, 'desc'] ]
			});
		} );
	</script>
	
</body>
</html>

<?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/layouts/app.blade.php ENDPATH**/ ?>