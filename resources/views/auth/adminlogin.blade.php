<x-guest-layout>
    <x-slot name="title">
        Admin Login
    </x-slot>
    
    
        <section class="auth">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                        
                        <div class="text-center mb-4">
                            <a href="{{url('/')}}" ><img class="auth__logo img-fluid" 
                            src="{{ asset('storage/app/public/'. $settings->logo) }}" alt="{{$settings->site_name}}"> </a>
                            
                        
                            <x-jet-validation-errors class="alert alert-danger alert-dismissible fade show mb-2" />
    
                            @if (session('status'))
                                <div class="mb-4 text-sm font-medium text-green-600">
                                    {{ session('status') }}
                                </div>
                            @endif
                            
                        </div>
                        
                        <div class="card mt-3 mb-3">
                            <h1 class="text-center mt-3"> Admin Login</h1>
                            <form method="POST" action="{{ route('adminlogin') }}" class="mt-5 card__form">
                            @csrf
                
                                <div class="form-group">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="example@happ.com" />
                                </div>
                    
                                <div class="form-group">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                    <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="current-password" placeholder="Enter Password" />
                                </div>
                    
                               
                                    
                                    <div class="form-group">
                                        <x-jet-button class="btn btn-primary mt-4">
                                        {{ __('Login') }}
                                        </x-jet-button>
                                    </div>
                                
                               
                                
                            </form>
                           
                        </div>
                       
                        
        
                        
                    </div>
                </div>
            </div>
        </section>
       
        
    
</x-guest-layout>



