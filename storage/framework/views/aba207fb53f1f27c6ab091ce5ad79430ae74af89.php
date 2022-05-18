<!-- Stored in resources/views/child.blade.php -->

<!-- Sidebar -->

<div class="sidebar sidebar-style-2" data-background-color="light">
    <div class="sidebar-wrapper scrollbar scrollbar-inner">
        <div class="sidebar-content">
            <div class="user">
                <div class="info">
                    <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                        <span>
                            <?php echo e(Auth::user()->name); ?>

                        </span>
                    </a>
                </div>
            </div>
            <ul class="nav nav-primary">
                <li class="nav-item active">
                    <a href="<?php echo e(url('/dashboard')); ?>">
                        <i class="fas fa-tachometer-alt"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/dashboard/user/contribute')); ?>">
                        <i class="fas fa-coins"></i>
                        <p>Buy Token</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/dashboard/user/transactions')); ?>">
                        <i class="fas fa-exchange-alt" aria-hidden="true"></i>
                        <p>Transactions</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(url('/dashboard/user/account')); ?>">
                        <i class="fa fa-address-card" aria-hidden="true"></i>
                        <p>Profile</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo e(route('mytoken')); ?>">
                        <i class="fas fa-briefcase" aria-hidden="true"></i>
                        <p>My Token</p>
                    </a>
                </li>
                <?php if($settings->usestake): ?>
                    <li class="nav-item">
                        <a href="<?php echo e(route('staketoken')); ?>">
                            <i class="fas fa-handshake" aria-hidden="true"></i>
                            <p>Stake Token</p>
                        </a>
                    </li>
                <?php endif; ?>
                 
                
                <li class="nav-item">
                    <a href="<?php echo e(route('homepage')); ?>" target="_blank">
                        <i class="fa fa-home" aria-hidden="true"></i>
                        <p>Main Site</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- End Sidebar -->
<?php /**PATH /home/bryngrgz/lulocash.brynamics.xyz/resources/views/user/sidebar.blade.php ENDPATH**/ ?>