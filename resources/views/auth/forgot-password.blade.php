<x-guest-layout>
        <x-slot name="title">
        Confirm your password
    </x-slot>
    
        <section class="auth">
            <div class="container">
                <div class="row justify-content-center user-auth">
                    <div class="col-12 col-md-6 col-lg-6 col-sm-10 col-xl-6 ">
                        
                         @if (session('status'))
            <div class="mb-4 text-sm font-medium text-green-600">
                {{ session('status') }}
            </div>
        @endif
                        
                         <x-jet-validation-errors class="alert alert-danger alert-dismissible fade show mb-2" />
                        
                        <div class="text-center text-white mb-4" >
                            <p> 
                            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
                            </p>
                            
                        </div>
                        
                        
                        
                        <div class="card mt-3 mb-3">
                            <h1 class="text-center mt-3">  Confirm your password</h1>
                            <form method="POST" action="{{ route('password.email') }}" class="mt-5 card__form">
                            @csrf
                
                                
                    
                                <div class="form-group">
                                    <x-jet-label for="email" value="{{ __('Email') }}" />
                                    <x-jet-input id="email" class="form-control" type="email" name="email" :value="old('email')" required autofocus placeholder="example@happ.com" />
                                </div>
                    
                               
                                    
                                    <div class="form-group">
                                        <x-jet-button class="btn btn-primary mt-4">
                                       {{ __('Email Password Reset Link') }}
                                        </x-jet-button>
                                    </div>

                            </form>
                           
                        </div>
                       
                        
        
                        
                    </div>
                </div>
            </div>
        </section>
       
        
    
</x-guest-layout>

