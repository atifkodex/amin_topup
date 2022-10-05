@extends('layouts.website.default')

<style>
    .reg-box {
        background: linear-gradient(73.58deg, #04376D 1.64%, #2762A1 88.81%) !important;
        border-radius: 16px;
    }
    .reg-box p{
        color: white !important;
    }
    .reg-box p a{
        background: transparent !important;
    }
 
    .right-inner {
        position: relative;
    
    }
    .right-inner  img{
          position: absolute;
          right: 0px;
          padding: 12px 12px;
          width: 50px;
          z-index: 999;
          top: 5px;
        }
    .info-section-two {
        position: relative;
    }

    .right-polygon-two {
        position: absolute;
        top: 8px;
        right: 16px;
    }

    .lefts-polygon-two {
        display: none
    }

    @media screen and (min-width:768px) {
        .lefts-polygon-two {
            position: absolute;
            bottom: 0% !important;
            left: 0% !important;
            width: 13%;
            z-index: -1;
            display: block;
        }


    }

  
    @media screen and (max-width:576px) {
    
        .right-inner  img{
          position: absolute;
          right: 0px;
          padding: 12px 12px;
          width: 40px;
          z-index: 999;
          top: 5px;
        }
    }
</style>
@section('content')
    @include('includes.website.navbar')
    <div class="info-section-two container-fluid px-0 my-3 my-md-5">
        <div class="amount-section container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="amount-heading col-12 col-md-6 px-0">
                        <h1>Join Amin Top-Up <span>to continue</span></h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="reg-box my-3 my-lg-5">
                        <form class="pt-5">
                            <div class="form-group form-field right-inner">
                                <img src="{{ asset('assets/website-images/message-icon.svg') }}" alt="icon">
                              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email">
                            </div>
                            <div class="form-group form-field right-inner">
                                <img src="{{ asset('assets/website-images/eye.svg') }}"  onclick="viewPsd()"  alt="icon" style="cursor: pointer">
                              <input type="password" class="form-control" id="loginpassword" name="password" placeholder="enter your password">
                            </div>
                            <a href="" type="submit" class="btn my-3 my-lg-4">LOG IN</a>
                          </form>
                        <p class="py-3">Don't have account?<a href=""><span>Sign Up</span></a> 
                        </p>
                    </div>
                </div>
            </div>
            <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
            <img class="right-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
        </div>
    </div>
    @include('includes.website.footer-navbar')
@endsection

@section('insertjavascript')
<script>
    function viewPsd() {
      var inputField = document.getElementById("loginpassword");
      if (inputField.type === "password") {
        inputField.type = "text";
      } else {
        inputField.type = "password";
      }
    }
    </script>
@endsection
