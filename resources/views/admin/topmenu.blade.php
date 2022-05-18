
<div class="main-header">
    <!-- Logo Header -->
<div class="logo-header" data-background-color="blue">
        <a href="/" class="logo" id="applogo">
            {{$settings->site_name}}
        </a>
    <button class="ml-auto navbar-toggler sidenav-toggler" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon">
                <i class="icon-menu "></i>
            </span>
        </button>
        <button class="topbar-toggler more"><i class="icon-options-vertical "></i></button>
        <div class="nav-toggle">
            <button class="btn btn-toggle toggle-sidebar">
                <i class="icon-menu "></i>
            </button>
        </div>
        
    </div>
    <!-- End Logo Header -->

    <!-- Navbar Header -->
    <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue">
        
        <div class="container-fluid">
            <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                <li class="nav-item dropdown hidden-caret">
                    <a class="nav-link" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="text-white fas fa-user"></i>
                    </a>
                   
                    <ul class="dropdown-menu dropdown-user animated fadeIn">
                        <div class="dropdown-user-scroll scrollbar-outer">
                            <li>
                                <a class="dropdown-item" href="{{route('adminprofile')}}">Account</a>
                                <a class="dropdown-item" href="{{route('settings')}}">Settings</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{ route('adminlogout') }}"
                                onclick="event.preventDefault();
                                document.getElementById('logoutform').submit();">
                                Logout
                                </a>
                                <form id="logoutform" action="{{ route('adminlogout') }}" method="POST">
                                    {{ csrf_field() }}
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