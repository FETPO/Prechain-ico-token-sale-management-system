<x-guest-layout>
    <x-slot name="title">
        User Login
    </x-slot>
    
    
        <section class="auth">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                        
                        <div class="text-center mb-4">
                            <a href="{{url('/')}}" ><img class="auth__logo img-fluid" 
                                src="{{ asset('storage/app/public/'. $settings->logo) }}" alt="{{$settings->site_name}}">  
                            </a>
                            
                             <!--   <x-slot name="logo">-->
                             <!--       <x-jet-authentication-card-logo />-->
                             <!--   </x-slot>-->
                            
                            <x-jet-validation-errors class="alert alert-danger alert-dismissible fade show mb-2" />
    
                            @if (session('status'))
                                <div class="mb-4 text-sm font-medium text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
                        </div>
                        
                        <div class="card mt-3 mb-3">
                            <h1 class="text-center mt-3"> User Login</h1>
                            <form method="POST" action="{{ route('login') }}" class="mt-5 card__form">
                            @csrf
                
                                <div class="form-group">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                    
                                <div class="form-group">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" />
                                </div>
                    
                                <div class="form-group">
                                    <label for="remember_me" class="flex items-center">
                                        <x-jet-checkbox id="remember_me" name="remember" />
                                        <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                    </label>
                                </div>
                            
                               
                                    <!--@if (Route::has('password.request'))-->
                                    <!--    <a class="text-sm text-gray-600 underline hover:text-gray-900" href="{{ route('password.request') }}">-->
                                    <!--        {{ __('Forgot your password?') }}-->
                                    <!--    </a>-->
                                    <!--@endif-->
                                    
                                    <div class="form-group">
                                        <x-jet-button class="btn btn-primary mt-4">
                                        {{ __('Login') }}
                                        </x-jet-button>
                                    </div>
                                
                                <div class="text-center mb-3">
                                    <small class=" text-center mb-2">Forget your Password <a href="{{ route('password.request') }}" class="link ml-1">Reset.</a> </small>
                                    <small class=" text-center">Dont have an Account yet? <a href="{{route('register')}}" class="link ml-1">Sign up.</a> </small>
                                </div>
                                @if($settings->social == "yes")
                                <div class="text-center mt-3">
                                    <h6>Or Login With</h6>
                                    <hr>
                                   <a href="{{route('social.redirect', ['social' => 'google'])}}" class="btn btn-danger mt-4"><i
                                            class="text-red-600 fas fa-google"></i> Google</a>
                                </div>
                                @endif
                            </form>
                            <!--<div class="row">-->
                                <!--end col-->
                            <!--    <div class="mb-4 text-center">-->
                            <!--        <h6>Or Login With</h6>-->
                            <!--    </div>-->
                            <!--    <div class="mt-3 text-center col-12">-->
                                    
                                    
                            <!--    </div>-->
                                <!--end col-->
                            <!--</div>-->
                        </div>
                       
                        
        
                        
                    </div>
                </div>
            </div>
        </section>
       
        
    
</x-guest-layout>
