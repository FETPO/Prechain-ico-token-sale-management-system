<x-guest-layout>
        <x-slot name="title">
            Register an account
        </x-slot>
    
    <section class="auth">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                        
                        <div class="text-center mb-4">
                            <a href="{{url('/')}}" ><img class="auth__logo img-fluid" 
                                src="{{ asset('storage/app/public/'. $settings->logo) }}" alt="{{$settings->site_name}}"> </a>
                            
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
                            <h1 class="text-center mt-3"> User Registration</h1>
                            <form method="POST" action="{{ route('register') }}" class="mt-5 card__form">
                            @csrf
                
                                <div class="form-group">
                                   <x-jet-label for="name" value="{{ __('Username') }}" />
                                        <x-jet-input id="username" class="form-control" type="text" name="username" required autofocus />
                                </div>
                    
                                <div class="form-group">
                                    <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input id="name" class="form-control" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                                </div>
                                
                                <div class="form-group">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus />
                                </div>
                                
                                <div class="form-group">
                                    <x-jet-label for="password" value="{{ __('Password') }}" />
                                <x-jet-input id="password" class="form-control" type="password" name="password" required autocomplete="new-password" />
                                </div>
                                
                                <div class="form-group">
                                    <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                                    <x-jet-input id="password_confirmation" class="form-control" type="password" name="password_confirmation" required autocomplete="new-password" />
                                </div>
                                @if($settings->captcha == "true")
                                <div class="form-group">
                                     {!! NoCaptcha::display() !!}
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="help-block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>
                                @endif
                               
                                <div class="form-group">
                                    <x-jet-button class="btn btn-primary mt-4">
                                    {{ __('Register') }}
                                    </x-jet-button>
                                </div>
                                
                                <div class="text-center mb-3">
                                    
                                    <a href="{{route('login')}}" class="link ml-1"><small class=" text-center">{{ __('Already registered?') }}</small>Login</a> 
                                </div>
                                @if($settings->social == "yes")
                                <div class="text-center mt-3">
                                    <h6>Or Login With</h6>
                                    <hr>
                                   <a href="{{route('social.redirect', ['social' => 'google'])}}" class="btn btn-danger google mt-4"><i
                                            class="text-red-600 fas fa-google"></i> Google</a>
                                </div>
                                @endif
                            </form>
                           
                        </div>
                       
                    
                        
                    </div>
                </div>
            </div>
        </section>
        <script>
            $('#username').keypress(function( e ) {
                //alert('het');
                if(!/[0-9a-zA-Z-]/.test(String.fromCharCode(e.which)))
                return false;
            });
        </script>
</x-guest-layout>
