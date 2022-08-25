@extends('layouts.admin-default')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
           <div class="login-content-outer">
            <div class="login-content py-5">
                <div class="login-heading signup-heading">
                    <h1>Create a new Admin</h1>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group login-email-field">
                            <label for="username">Name</label>
                            <input type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter Name">
                          
                          </div>
                        <div class="form-group login-email-field">
                          <label for="signupemail">Email</label>
                          <input type="email" class="form-control" id="signupemail" aria-describedby="emailHelp" placeholder="Enter Email">
                        
                        </div>
                        <div class="form-group login-email-field">
                          <label for="signuppassword">Password</label>
                          <input type="password" class="form-control" id="signuppassword" placeholder="Enter your password">
                         
                        </div>
                        <div class="form-group login-email-field">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" placeholder="Enter your password">
                            <div class="text-right create-account">
                                <span>already have an account?<a href="{{url('/')}}" >sign in</a></span>
                              
                            </div>
                           
                          </div>
                        <div class="d-flex justify-content-center  signup-button-outer pt-5">
                            <button type="submit" class="btn  login-btn">Sign up</button>
                            
                        </div>
   
                        
                      </form>
                      
                </div>
                
            </div>
           </div>
            
           
        </div>
        <div class="col-sm-4 login-banner-right px-0">
            <div class="login-logo text-center">
                <img src="{{asset('assets/images/login-logo.svg')}}" alt="image">
                <h1><span>Amin</span>Topup</h1>
            </div>

        </div>
    </div>
</div>

@endsection