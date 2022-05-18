<?php
if (Auth::user()->dashboard_style == "light") {
    $bgmenu="blue";
    $bg="light";
    $text = "dark";
} else {
    $bgmenu="dark";
    $bg="dark";
    $text = "light";
}

?>
<div class="main-header">
    <!-- Logo Header -->
    <div class="logo-header" data-background-color="<?php echo e($bgmenu); ?>">
        <a href="/" class="logo" style="font-size: 27px; color:#fff;">
            <?php echo e($settings->site_name); ?>

        </a>
        <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu"></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu"></i>
            </button>
        </div>
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="<?php echo e($bgmenu); ?>">
        
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                
               <li class="nav-item hidden-caret">
                   <div>
                       <a class="p-2 btn btn-outline-light" href="<?php echo e(route('kycinfo')); ?>"> <i class="fas fa-copy"></i> &nbsp; Kyc Application</a>
                   </div> 
                </li>
                
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fas fa-user"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <a class="dropdown-item" href="<?php echo e(url('/dashboard/user/account')); ?>">Profile</a>
                                <a class="dropdown-item" href="<?php echo e(route('referral')); ?>">Referral</a>
                                <a class="dropdown-item" href="<?php echo e(route('activity')); ?>">Activity</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                    onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                                    Logout
                                    </a>
                                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                    <?php echo e(csrf_field()); ?>

                                </form> 
                            </li>
                        </div>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <!-- End Navbar -->
</div>
<?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/user/topmenu.blade.php ENDPATH**/ ?>