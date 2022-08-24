@extends('layouts.admin-default')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-8">
           <div class="login-content-outer">
            <div class="login-content py-5">
                <div class="login-heading text-center">
                    <h1>Sign in</h1>
                    <p>Welcome to Amin Pay</p>
                </div>
                <div class="login-form">
                    <form>
                        <div class="form-group login-email-field">
                          <label for="loginemail">E-Mail</label>
                          <img src="{{asset('assets/images/mail.svg')}}" alt="image">
                          <input type="email" class="form-control" id="loginemail" aria-describedby="emailHelp" placeholder="Enter your eMail">
                        
                        </div>
                        <div class="form-group login-email-field">
                          <label for="loginpassword">Password</label>
                          <img src="{{asset('assets/images/hide.svg')}}" alt="image" onclick="myFunction()" style="cursor: pointer">
                          <input type="password" class="form-control" id="loginpassword" placeholder="Enter your password">
                          <div class="text-right create-account">
                            <a href="{{url('sign-up')}}" >create new account</a>
                          </div>
                         
                        </div>
                        <div class="d-flex justify-content-center login-button-outer">
                            <button type="submit" class="btn  login-btn">Sign in</button>
                            
                        </div>
   
                        
                      </form>
                      
                </div>
                <div class="login-footer text-center">
                    <p>&copy; Amin Technologies Inc. All Right Reserved.</p>
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
@section('inserfooter')
<script>
    function myFunction() {
      var x = document.getElementById("loginpassword");
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
    </script>
@endsection