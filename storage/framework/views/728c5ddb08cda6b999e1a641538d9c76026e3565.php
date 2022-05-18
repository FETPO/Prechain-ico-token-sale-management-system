<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo e($settings->site_name); ?> - Bitcoin and Cryptocurrency ICO System</title>
    <meta name="description" content="<?php echo e($settings->site_name); ?> is a Bitcoin and Cryptocurrency ICO System." />
    <meta name="keywords" content="bitcoin, ethereum, monero, ico, token, free token, btc, eth" />


    <link rel="icon" href="<?php echo e(asset('storage/app/public/'. $settings->favicon)); ?>" type="image/png"/>

    <!-- Bootstrap & Plugins CSS -->
    <link href="<?php echo e(asset('front/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css">
    <link href="<?php echo e(asset('front/assets/css/font-awesome.min.css')); ?>" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="<?php echo e(asset('front/assets/css/styles.css')); ?>" rel="stylesheet" type="text/css">


</head>

<body>

    <script>
		{<?php echo $settings->livechat; ?>}	
	</script>

    <!-- ***** Header Area Start ***** -->
    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-12 position-relative">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="<?php echo e(asset('storage/app/public/'. $settings->logo)); ?>" class="light-logo"
                                alt="<?php echo e($settings->site_name); ?>" />
                            <img src="<?php echo e(asset('storage/app/public/'. $settings->logo)); ?>" class="dark-logo"
                                alt="<?php echo e($settings->site_name); ?>" />
                        </a>
                        <!-- ***** Logo End ***** -->



                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li><a href="#what-is-ico">WHAT IS ICO</a></li>
                            <li><a href="#token-sale">TOKEN SALE</a></li>
                            <li><a href="#roadmap">ROADMAP</a></li>
                            <li><a href="#apps">APPS</a></li>
                            <li><a href="#team">TEAM</a></li>
                            <li><a href="#faq">FAQ</a></li>
                            <li><a href="#contact">CONTACT</a></li>
                            <li><a href="/login" class="btn-nav-box">BUY TOKEN</a></li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


    <!-- ***** Wellcome Area Start ***** -->
    <section class="welcome-area bg-top-right" id="welcome-1">
        <div class="header-token basic">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 align-self-center">
                        <h1><?php echo e($settings->site_name); ?> Decentralized Blockchain ICO System</h1>
                        <p><?php echo e($settings->site_name); ?> makes it easy for user or Businesses who wants to Create there own Coins, <?php echo e($settings->site_name); ?>

                            is A fully Fledge Blockchain ICO System</p>
                        <a href="#" class="btn-secondary-box">Download Whitepaper</a>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12 align-self-center">
                        <div class="box">
                            <div class="token">
                                <h6 class="title"><span class="text-primary"><?php echo e($settings->site_name); ?></span> ICO SALE IS OPEN
                                </h6>
                                <!-- ***** Countdown Start ***** -->
                                <ul class="countdown" id="countdown">
                                    <li>
                                        <span class="days" id="dayls"></span>
                                        <p class="days_ref">days</p>
                                    </li>
                                    <li class="seperator"></li>
                                    <li>
                                        <span class="hours" id="hours"></span>
                                        <p class="hours_ref">hours</p>
                                    </li>
                                    <li class="seperator"></li>
                                    <li>
                                        <span class="minutes" id="minutes"></span>
                                        <p class="minutes_ref">minutes</p>
                                    </li>
                                    <li class="seperator"></li>
                                    <li>
                                        <span class="seconds" id="seconds"></span>
                                        <p class="seconds_ref">seconds</p>
                                    </li>
                                </ul>
                                <!-- ***** Countdown End ***** -->
                                
                                <div class="token-input">
                                    <input type="text" placeholder="100" data-step="100" />
                                    <i class="fa fa-plus"></i>
                                    <i class="fa fa-minus"></i>
                                    <button>PURCHASE TOKEN NOW</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="scroll-to">
            <a href="#what-is-ico">
                <i class="fa fa-angle-double-down" aria-hidden="true"></i>
            </a>
        </div>
    </section>
    <!-- ***** Wellcome Area End ***** -->



    <!-- ***** What is ICO Start ***** -->
    <section class="section bg-bottom" id="what-is-ico">
        <div class="container">
            <!-- ***** Features Items Start ***** -->
            <div class="row m-bottom-70">
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="features-elliptical elliptical-bottom"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.2s">
                        <div class="icon">
                            <i class="fa fa-cube"></i>
                        </div>
                        <h5 class="features-title">Easy Token Integration</h5>
                        <p>Morbi pharetra sapien ut mattis viverra. Curabitur sit amet mattis magna lipsum.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                    <div class="features-elliptical elliptical-top"
                        data-scroll-reveal="enter right move 30px over 0.6s after 0.4s">
                        <div class="icon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <h5 class="features-title">Advanced Security</h5>
                        <p>Donec pellentesque turpis utium lorem imperdiet semper. Ut mat viverra mattis.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 col-12"
                    data-scroll-reveal="enter right move 30px over 0.6s after 0.6s">
                    <div class="features-elliptical">
                        <div class="icon">
                            <i class="fa fa-server"></i>
                        </div>
                        <h5 class="features-title">Decentralized</h5>
                        <p>Proin arcu ligula, malesuada id tincidunt laoreet, facilisis at justo. Sed at lorem
                            malesuada.</p>
                    </div>
                </div>
            </div>
            <!-- ***** Features Items End ***** -->

            <!-- ***** About Start ***** -->
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                    <div class="left-heading">
                        <h2 class="section-title">A compelling value proposition.</h2>
                    </div>
                    <div class="left-text">
                        <p class="dark"><?php echo e($settings->site_name); ?> (<?php echo e($settings->site_name); ?>) is an open source, Bitcoin-like digital currency
                            which uses
                            a
                            proof of work script algorithm.</p>
                        <p>The genesis block was mined on March 1st, 2014. The total number of mineable <?php echo e($settings->site_name); ?> is
                            245,465,283. The mining of <?php echo e($settings->site_name); ?> is divided into Epochs: each Epoch mines 36000 blocks of
                            coins and is targeted to last approximately 25 days. </p>
                    </div>
                    <a href="#" class="btn-secondary-line mobile-bottom-fix">Download Whitepaper</a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                    <img src="<?php echo e(asset('front/assets/images/theme-1-about.svg')); ?>" class="img-fluid float-right"
                        alt="<?php echo e($settings->site_name); ?> ICO">
                </div>
            </div>
            <!-- ***** About End ***** -->
        </div>
    </section>
    <!-- ***** What is ICO End ***** -->

    <!-- ***** Token Sale Start ***** -->
    <section class="section gradient" id="token-sale">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading colored">
                        <h2 class="section-title">Token Sale</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text colored">
                        <p>Fusce placerat pretium mauris, vel sollicitudin elit lacinia vitae. Quisque sit amet nisi
                            erat. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="box">
                        <div class="row">
                            <!-- ***** Token Progress and Info Start ***** -->
                            <div class="col-lg-6 col-md-6 cols-m-12">
                                <!-- ***** Token Progress Start ***** -->
                                <div class="token-progress">
                                    <ul id="test">
                                        <li class="progress-active" data-progress="50%"></li>
                                        <li class="item complate" data-position="0%">
                                            <strong>0</strong>
                                            <span>Start</span>
                                        </li>
                                        <li class="item complate" data-position="25%">
                                            <strong>$2 M</strong>
                                            <span>Pre Sale</span>
                                        </li>
                                        <li class="item complate" data-position="48%">
                                            <strong>$12 M</strong>
                                            <span>Soft Cap</span>
                                        </li>
                                        <li class="item" data-position="73%"></li>
                                    </ul>
                                </div>
                                <!-- ***** Token Progress End ***** -->

                                <!-- ***** Token Info Table Start ***** -->
                                <div class="token-info">
                                    <div class="item">
                                        <strong>Start</strong>
                                        <span>Started</span>
                                    </div>
                                    <div class="item">
                                        <strong>Token Supply</strong>
                                        <span>100.000.000 <?php echo e($settings->site_name); ?> ETH</span>
                                    </div>
                                    <div class="item">
                                        <strong>Accepted Tokens</strong>
                                        <span>BTC, ETH, ETC, NEM, EOS</span>
                                    </div>
                                    <div class="item">
                                        <strong>Project Protocol</strong>
                                        <span>ETH, ETC - <?php echo e($settings->site_name); ?> 20</span>
                                    </div>
                                    <div class="item">
                                        <strong>Circulation Supply</strong>
                                        <span>37.000.000 <?php echo e($settings->site_name); ?> ETH</span>
                                    </div>
                                    <div class="item">
                                        <strong>Maximum Cap</strong>
                                        <span>60 M USD</span>
                                    </div>
                                </div>
                                <!-- ***** Token Info Table End ***** -->
                            </div>
                            <!-- ***** Token Progress and Info End ***** -->

                            <!-- ***** Token Countdown and Payment Start ***** -->
                            <div class="col-lg-6 col-md-6 cols-m-12">
                                <div class="token">
                                    <h6 class="title">ICO SALE IS OPEN</h6>
                                    <!-- ***** Countdown Start ***** -->
                                    <ul class="countdown">
                                        <li>
                                            <span class="days">00</span>
                                            <p class="days_ref">days</p>
                                        </li>
                                        <li class="seperator"></li>
                                        <li>
                                            <span class="hours">00</span>
                                            <p class="hours_ref">hours</p>
                                        </li>
                                        <li class="seperator"></li>
                                        <li>
                                            <span class="minutes">00</span>
                                            <p class="minutes_ref">minutes</p>
                                        </li>
                                        <li class="seperator"></li>
                                        <li>
                                            <span class="seconds">00</span>
                                            <p class="seconds_ref">seconds</p>
                                        </li>
                                    </ul>
                                    <!-- ***** Countdown End ***** -->
                                    <div class="token-payment">
                                        <span>Select Payment Method</span>
                                        <div class="radios">
                                            <div class="form-radio">
                                                <input type="radio" id="check1" name="payment" checked="" />
                                                <label for="check1">
                                                    <i class="fa fa-bitcoin"></i>
                                                </label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" id="check2" name="payment" />
                                                <label for="check2">
                                                    <i class="fa fa-paypal"></i>
                                                </label>
                                            </div>
                                            <div class="form-radio">
                                                <input type="radio" id="check3" name="payment" />
                                                <label for="check3">
                                                    <i class="fa fa-cc-visa"></i>
                                                </label>
                                            </div>
                                        </div>
                                        <a href="dark-block-explorer.html" class="btn-primary-line">PURCHASE TOKEN
                                            NOW</a>
                                    </div>
                                </div>
                            </div>
                            <!-- ***** Token Countdown and Payment End ***** -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Token Sale End ***** -->

    <!-- ***** Roadmap Start ***** -->
    <section class="section" id="roadmap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Roadmap</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Cras at leo et lacus laoreet euismod. Nulla malesuada tortor ac scelerisque sollicitudin.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="roadmap-full">
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date">04 2018</h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status complate"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Development of a desktop application for Windows, Android Wallet. Connecting Sidechain +
                                Secure Sandbox. Opportunity to create decentralized applications on the <?php echo e($settings->site_name); ?>

                                platform.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date">05 2018</h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status complate"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Running the delegate system. As soon as the system of delegates on the platform is
                                launched, the documentation on how to start the delegate will be available in the FAQ
                                section</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date">06 2018</h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status complate"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Placement of <?php echo e($settings->site_name); ?> on exchanges. The list of exchanges that placed <?php echo e($settings->site_name); ?> will be
                                constantly updated, please, kindly check our site.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date">07 2018</h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Updating the consensus of the Delegates. Increase in decentralization, through the
                                distribution of a portion of the delegate's income to those who vote for them.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date">08 2018</h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Adding additional crypto currencies to the wallet. Priority: Bitcoin, Litecoin, Dash,
                                Zcash and Monero. The rest will be added during voting.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="roadmap-item-full" data-scroll-reveal="enter bottom move 50px over 0.6s after 0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-md-3 col-sm-12">
                            <h6 class="date">09 2018</h6>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-12 position-relative">
                            <div class="status"></div>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-12">
                            <p>Creating a DAO module. Increase the effectiveness of the community through the creation
                                of a special section of decision-making and budget management.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Roadmap End ***** -->

    <!-- ***** Apps Start ***** -->
    <section class="section gradient" id="apps">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center mobile-bottom-fix">
                    <div class="left-heading light">
                        <h2 class="section-title">Apps</h2>
                    </div>
                    <div class="left-text light m-bottom-0">
                        <p>Maecenas et consequat nunc. Duis faucibus orci eu varius sagittis. In quam elit, euismod a
                            urna quis</p>
                        <ul>
                            <a href="">
                                <li> <?php echo e($settings->site_name); ?> Wallet</li>
                            </a>
                            <li>Transaction info</li>
                            <li>My account</li>
                            <li>Blockchain Explorer</li>
                            <li>Transfer</li>
                            <li>Connected peers to network <?php echo e($settings->site_name); ?></li>
                        </ul>
                        <a class="app-download" href="#"><img
                                src="<?php echo e(asset('front/assets/images/store-btn-apple.svg')); ?>" alt=""></a>
                        <a class="app-download" href="#"><img
                                src="<?php echo e(asset('front/assets/images/store-btn-google.svg')); ?>" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 align-self-center">
                    <img src="<?php echo e(asset('front/assets/images/mockups/dark.png')); ?>" class="img-fluid float-right"
                        alt="App">
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Apps End ***** -->

    <!-- ***** Team Start ***** -->
    <section class="section bg-bottom" id="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h2 class="section-title">Team</h2>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Fusce placerat pretium mauris, vel sollicitudin elit lacinia vitae. Quisque sit amet nisi
                            erat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-6 col-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.2s">
                    <div class="team-round">
                        <div class="profile">
                            <div class="img">
                                <img src="<?php echo e(asset('front/assets/images/1.jpg')); ?>" alt="">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="team-name">Lance Bogrol</h3>
                        <span>CEO & Lead Blockchain</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.4s">
                    <div class="team-round">
                        <div class="profile">
                            <div class="img">
                                <img src="<?php echo e(asset('front/assets/images/2.jpg')); ?>" alt="">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="team-name">Brian Cumin</h3>
                        <span>CTO & Senior Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.6s">
                    <div class="team-round">
                        <div class="profile">
                            <div class="img">
                                <img src="<?php echo e(asset('front/assets/images/3.jpg')); ?>" alt="">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="team-name">Jackson Pot</h3>
                        <span>Blockchain App Developer</span>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-6 col-12"
                    data-scroll-reveal="enter bottom move 50px over 0.6s after 0.8s">
                    <div class="team-round">
                        <div class="profile">
                            <div class="img">
                                <img src="<?php echo e(asset('front/assets/images/4.jpg')); ?>" alt="">
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <h3 class="team-name">Douglas Lyphe</h3>
                        <span>Community Management</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Team End ***** -->

    <!-- ***** Telegram Parallax Start ***** -->
    <section class="parallax">
        <div class="parallax-content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="section-title">Join Us On Telegram</h1>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <p>Fusce placerat pretium mauris, vel sollicitudin elit lacinia vitae. Quisque sit amet nisi
                            erat.</p>
                    </div>
                    <div class="offset-lg-3 col-lg-6">
                        <a href="#" class="btn-white-line">Join Us On Telegram</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Telegram Parallax End ***** -->

    <!-- ***** FAQ Start ***** -->
    <section class="section bg-top" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="center-heading">
                        <h1 class="section-title">FAQ</h1>
                    </div>
                </div>
                <div class="offset-lg-3 col-lg-6">
                    <div class="center-text">
                        <p>Fusce placerat pretium mauris, vel sollicitudin elit lacinia vitae. Quisque sit amet nisi
                            erat.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-1">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-1" aria-expanded="false" aria-controls="collapse-1">
                                    <span class="badge">1</span> What are the benefits of digital currency?
                                </button>
                            </h2>
                            <div id="collapse-1" class="accordion-collapse collapse" aria-labelledby="heading-1"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu
                                        purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna
                                        pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus
                                        et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit
                                        amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam
                                        fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue
                                        ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit
                                        amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-2">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                                    <span class="badge">2</span> How long has digital currency existed?
                                </button>
                            </h2>
                            <div id="collapse-2" class="accordion-collapse collapse" aria-labelledby="heading-2"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu
                                        purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna
                                        pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus
                                        et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit
                                        amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam
                                        fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue
                                        ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit
                                        amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-3">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
                                    <span class="badge">3</span> How will digital currency affect daily life
                                    in the US
                                    and around the world?
                                </button>
                            </h2>
                            <div id="collapse-3" class="accordion-collapse collapse" aria-labelledby="heading-3"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu
                                        purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna
                                        pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus
                                        et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit
                                        amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam
                                        fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue
                                        ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit
                                        amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-4">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
                                    <span class="badge">4</span> Why should I use <?php echo e($settings->site_name); ?> currency and how is
                                    it
                                    different
                                    from other currencies?
                                </button>
                            </h2>
                            <div id="collapse-4" class="accordion-collapse collapse" aria-labelledby="heading-4"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu
                                        purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna
                                        pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus
                                        et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit
                                        amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam
                                        fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue
                                        ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit
                                        amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-5">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
                                    <span class="badge">5</span> How is <?php echo e($settings->site_name); ?> helping entrepreneurs?
                                </button>
                            </h2>
                            <div id="collapse-5" class="accordion-collapse collapse" aria-labelledby="heading-5"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu
                                        purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna
                                        pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus
                                        et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit
                                        amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam
                                        fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue
                                        ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit
                                        amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-6">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-6" aria-expanded="false" aria-controls="collapse-6">
                                    <span class="badge">6</span> What benefits can I get from joining the
                                    <?php echo e($settings->site_name); ?> crowd
                                    funding platform?
                                </button>
                            </h2>
                            <div id="collapse-6" class="accordion-collapse collapse" aria-labelledby="heading-6"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu
                                        purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna
                                        pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus
                                        et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit
                                        amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam
                                        fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue
                                        ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit
                                        amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="heading-7">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapse-7" aria-expanded="false" aria-controls="collapse-7">
                                    <span class="badge">7</span> How do I convert my <?php echo e($settings->site_name); ?> currency into US
                                    dollars
                                    or
                                    other currencies?
                                </button>
                            </h2>
                            <div id="collapse-7" class="accordion-collapse collapse" aria-labelledby="heading-7"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Donec tempus sodales dolor, at efficitur enim posuere auctor. Nam et nisi eu
                                        purus tempor faucibus aliquet vitae orci. Curabitur sollicitudin leo et magna
                                        pharetra efficitur. Nullam et scelerisque lectus. Orci varius natoque penatibus
                                        et magnis dis parturient montes, nascetur ridiculus mus. Quisque faucibus sit
                                        amet odio eget scelerisque. Mauris dictum cursus ornare.</p>
                                    <p>Ut vehicula blandit tellus. Sed sit amet bibendum leo, non sagittis neque. Nam
                                        fringilla fermentum tortor, ac gravida velit facilisis id. Donec congue
                                        ullamcorper velit, at malesuada arcu faucibus pretium. Donec rhoncus magna sit
                                        amet massa venenatis, ut convallis justo ultricies.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** FAQ End ***** -->

    <!-- ***** Contact & Footer Start ***** -->
    <footer id="contact">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 col-md-12 col-sm-12">
                        <div class="contact">
                            <h3 class="section-title">Get In Touch</h3>
                            <p>Fusce placerat pretium mauris, vel sollicitudin elit lacinia vitae. Quisque sit amet nisi
                                erat.</p>
                            <ul class="list">
                                <li><i class="fa fa-envelope-o"></i><a
                                        href="mailto:<?php echo e($settings->site_email); ?>"><?php echo e($settings->site_email); ?></a>
                                </li>
                                <li><i class="fa fa-phone"></i><span><?php echo e($settings->phone); ?></span></li>
                                <li><i class="fa fa-paper-plane-o"></i><a href="#">Join us on Telegram</a></li>
                            </ul>
                            <ul class="social">
                                <li><a href="#"><i class="fa fa-facebook-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="#"><i class="fa fa-github-square"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="offset-lg-1 col-lg-6 col-md-12 col-sm-12">
                        <div class="contact-form">
                            <?php if (isset($component)) { $__componentOriginalaecef5a97d3402afc3bd193fb4467fecf7e8bb4a = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\DangerAlert::class, []); ?>
<?php $component->withName('danger-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalaecef5a97d3402afc3bd193fb4467fecf7e8bb4a)): ?>
<?php $component = $__componentOriginalaecef5a97d3402afc3bd193fb4467fecf7e8bb4a; ?>
<?php unset($__componentOriginalaecef5a97d3402afc3bd193fb4467fecf7e8bb4a); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <?php if (isset($component)) { $__componentOriginalefb6c7ab9c534676ce498db452c30763ee219126 = $component; } ?>
<?php $component = $__env->getContainer()->make(App\View\Components\SuccessAlert::class, []); ?>
<?php $component->withName('success-alert'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php $component->withAttributes([]); ?>
<?php if (isset($__componentOriginalefb6c7ab9c534676ce498db452c30763ee219126)): ?>
<?php $component = $__componentOriginalefb6c7ab9c534676ce498db452c30763ee219126; ?>
<?php unset($__componentOriginalefb6c7ab9c534676ce498db452c30763ee219126); ?>
<?php endif; ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
                            <h3 class="section-title">Say Something</h3>
                            <form action="<?php echo e(route('enquiry')); ?>" method="post">
                                <?php echo csrf_field(); ?>
                                <div class="form-element">
                                    <input type="text" name="name" placeholder="Name, surname" required>
                                </div>
                                <div class="form-element">
                                    <input type="email" name="email" placeholder="E-Mail" required>
                                </div>
                                <div class="form-element">
                                    <input type="text" name="subject" placeholder="Subject" required>
                                </div>
                                <div class="form-element">
                                    <textarea placeholder="Message" name="message" required></textarea>
                                </div>
                                <div class="form-element">
                                    <button class="btn-secondary-box">Submit</button>
                                </div>
                            </form>

                            
                        </div>


                    </div>

                </div>
            </div>
        </div>

        <div class="footer-bottom">
            <div class="container">
                <div class="row">

                    <div class="col-lg-5">
                        <p class="copyright"><?php echo e(date('Y')); ?> © <?php echo e($settings->site_name); ?> - Bitcoin and Cryptocurrency ICO System </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Contact & Footer End ***** -->


    <!-- jQuery -->
    <script src="<?php echo e(asset('front/assets/js/jquery-3.6.0.min.js')); ?>"></script>

    <!-- Bootstrap -->
    <script src="<?php echo e(asset('front/assets/js/popper.js')); ?>"></script>
    <script src="<?php echo e(asset('front/assets/js/bootstrap.min.js')); ?>"></script>

    <!-- Plugins -->
    <script src="<?php echo e(asset('front/assets/js/particles.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/assets/js/scrollreveal.min.js')); ?>"></script>
    <script src="<?php echo e(asset('front/assets/js/jquery.downCount.js')); ?>"></script>
    <script src="<?php echo e(asset('front/assets/js/parallax.min.js')); ?>"></script>

    <!-- Global Init -->
    <script src="<?php echo e(asset('front/assets/js/particle-dark.js')); ?>"></script>
    <script src="<?php echo e(asset('front/assets/js/custom.js')); ?>"></script>
    <script type="text/javascript">
    
    	(function () {
  const second = 1000,
        minute = second * 60,
        hour = minute * 60,
        day = hour * 24;

  //I'm adding this section so I don't have to keep updating this pen every year :-)
  //remove this if you don't need it
  let today = new Date(),
      dd = String(today.getDate()).padStart(2, "0"),
      mm = String(today.getMonth() + 1).padStart(2, "0"),
      yyyy = today.getFullYear(),
      nextYear = yyyy + 1,
      dayMonth = "08/02/", //Change Date and Month Here '09' is the month & '30' is the Date
      launchday = dayMonth + yyyy;
  
  today = mm + "/" + dd + "/" + yyyy;
  if (today > launchday) {
    launchday = dayMonth + nextYear;
  }
  //end
  
  const countDown = new Date(launchday).getTime(),
      x = setInterval(function() {    

        const now = new Date().getTime(),
              distance = countDown - now;

        document.getElementById("dayls").innerText = Math.floor(distance / (day)),
        document.getElementById("day").innerText = Math.floor(distance / (day)),
          document.getElementById("hours").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("hour").innerText = Math.floor((distance % (day)) / (hour)),
          document.getElementById("minutes").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("minute").innerText = Math.floor((distance % (hour)) / (minute)),
          document.getElementById("seconds").innerText = Math.floor((distance % (minute)) / second);
          document.getElementById("second").innerText = Math.floor((distance % (minute)) / second);

        //do something later when date is reached
        if (distance < 0) {
          document.getElementById("headline").innerText = "PRECHAIN ICO IS CLOSED!!!";
          document.getElementById("launch").innerText = "PRECHAIN ICO IS CLOSED!!!";
          document.getElementById("countdown").style.display = "none";
          document.getElementById("finished").style.display = "none";
          document.getElementById("content").style.display = "block";
          clearInterval(x);
        }
        //seconds
      }, 0)
  }());
     
    </script>
</body>



</html>
<?php /**PATH C:\Users\VICTORY.E\Documents\Brynamics\Prechain (1)\resources\views/home/index.blade.php ENDPATH**/ ?>