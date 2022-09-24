@extends('layouts.links')

@section('links')
{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> --}}
<body class="account-body accountbg">
       <!-- Log In page -->
       <div class="container">
        <div class="row vh-100 d-flex justify-content-center">
            <div class="col-12 align-self-center">
                <div class="row">
                    <div class="col-lg-5 mx-auto">
                        <div class="card">
                            <div class="card-body p-0 auth-header-box">
                                <div class="text-center p-3">
                                    <a href="index.html" class="logo logo-admin">
                                        <img src="images/logo-sm.png" height="50" alt="logo" class="auth-logo">
                                    </a>
                                    <h4 class="mt-3 mb-1 font-weight-semibold text-white font-18">Let's Get Started Dastyle</h4>   
                                    <p class="text-muted  mb-0">Sign in to continue to Dastyle.</p>  
                                </div>
                            </div>
                            <div class="card-body">
                                 <!-- Tab panes -->
                                <div class="tab-content">

                                    <div class="tab-pane active px-3 pt-3" id="Register_Tab" role="tabpanel">
                                        <form class="form-horizontal auth-form my-4" action="index.html">
        
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <div class="input-group mb-3">                                                                                         
                                                    <input type="text" class="form-control" name="username" id="username" placeholder="Enter username">
                                                </div>                                    
                                            </div><!--end form-group--> 
        
                                            <div class="form-group">
                                                <label for="useremail">Email</label>
                                                <div class="input-group mb-3">                                                                                         
                                                    <input type="email" class="form-control" name="email" id="useremail" placeholder="Enter Email">
                                                </div>                                    
                                            </div><!--end form-group-->
                
                                            <div class="form-group">
                                                <label for="userpassword">Password</label>                                            
                                                <div class="input-group mb-3">                                  
                                                    <input type="password" class="form-control" name="password" id="userpassword" placeholder="Enter password">
                                                </div>                               
                                            </div><!--end form-group--> 
        
                                            <div class="form-group">
                                                <label for="conf_password">Confirm Password</label>                                            
                                                <div class="input-group mb-3">                                   
                                                    <input type="password" class="form-control" name="conf-password" id="conf_password" placeholder="Enter Confirm Password">
                                                </div>
                                            </div><!--end form-group-->
                                             
                
                                            <div class="form-group row mt-4">
                                                <div class="col-sm-12">
                                                    <div class="custom-control custom-switch switch-success">
                                                        <input type="checkbox" class="custom-control-input" id="customSwitchSuccess2">
                                                        <label class="custom-control-label text-muted" for="customSwitchSuccess2">You agree to the Metrica <a href="#" class="text-primary">Terms of Use</a></label>
                                                    </div>
                                                </div><!--end col-->                                             
                                            </div><!--end form-group--> 
                
                                            <div class="form-group mb-0 row">
                                                <div class="col-12 mt-2">
                                                    <button class="btn btn-primary btn-block waves-effect waves-light" type="button">Register <i class="fas fa-sign-in-alt ml-1"></i></button>
                                                </div><!--end col--> 
                                            </div> <!--end form-group-->                           
                                        </form><!--end form-->
                                        <p class="mb-0 text-muted">Already have an account ?<a href="auth-login.html" class="text-primary ml-2">Log in</a></p>                                                    
                                    </div>
                                </div>
                            </div><!--end card-body-->
                            <div class="card-body bg-light-alt text-center">
                                <span class="text-muted d-none d-sm-inline-block">Tonacode © 2022</span>                                            
                            </div>
                        </div><!--end card-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end container-->
    <!-- End Log In page -->
@endsection
