@extends('layouts.admin-default')

@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-4  col-lg-6 d-flex align-items-center justify-content-center">
            <div class="">
                <img src="{{asset('assets/images/fp.png')}}" alt="image" style="width: 100%">
                {{-- <h1><span>Amin</span>Topup</h1> --}}
            </div>

        </div>
        <div class="col-md-8  col-lg-6">
           <div class="login-content-outer update-password-outer">
            <div class="login-content py-5">
                <div class="login-heading update-psd-heading text-center">
                    <h1>Change Password</h1>
                </div>
                <div class="login-form">
                      <form method="post" action="{{route('changePassword')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group login-email-field change-password">
                            <label for="currentpassword">Current Password</label>
                            <input type="password" name="old_pass" class="form-control" id="currentpassword" placeholder="Type here...">
                           
                          </div>
                        <div class="form-group login-email-field change-password">
                          <label for="newpassword">New Password</label>
                          <input type="password" name="new_pass" class="form-control" id="newpassword" placeholder="Type here...">
                        
                        </div>
                        <div class="form-group login-email-field change-password">
                            <label for="confirmpassword">Confirm Password</label>
                            <input type="password" class="form-control" id="confirmpassword" placeholder="Type here...">
                           
                          </div>
                          <div class="d-flex justify-content-center login-button-outer update-psd-outer pb-0">
                            <a href="javascript:void(0)" >
                              <button type="submit" class="btn  login-btn ">Update Password</button>
                            </a>
                          </form>
                          
                          
                      </div>
                </div>
            </div>
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