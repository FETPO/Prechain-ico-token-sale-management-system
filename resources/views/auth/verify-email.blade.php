<x-guest-layout>
        <x-slot name="title">
       Verify your Email Address
    </x-slot>
    
        <section class="auth">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                        
                        
                        <div class="text-center text-white mb-4">
                            <p> 
                            {{ __('Thanks for signing up! Before getting started, please verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
                            </p>
                            
                        </div>
                        
                        @if (session('status') == 'verification-link-sent')
                            <div class="mb-4 text-sm font-medium text-green-600">
                                {{ __('A new verification link has been sent to the email address you provided during registration.') }}
                            </div>
                        @endif
                        
                        
                        
                        <div class="card mt-3 mb-3">
                            <h1 class="text-center mt-3">  Resend Email verification</h1>
                            <form method="POST" action="{{ route('verification.send') }}" class="mt-5 card__form">
                            @csrf
                            
                                <div class="form-group">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="example@happ.com" />
                                </div>
                    
                               
                                    
                                    <div class="form-group">
                                        <x-jet-button class="btn btn-primary mt-4">
                                       {{ __('Resend Verification Email') }}
                                        </x-jet-button>
                                    </div>
                                
                            </form>
                            
                                <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                
                                <button type="submit" class="btn btn-danger mt-4 btn-block">
                                {{ __('Log Out') }}
                                </button>
                                </form>
                           
                        </div>
                       
                        
                    </div>
                </div>
            </div>
        </section>
       
        
    
</x-guest-layout>

