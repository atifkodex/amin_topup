@extends('layouts.website.default')

<style>
    .left-polygon-blue,
    .right-polygon-orange {
        display: none
    }

    .inner-wrapper {
        position: relative;
    }

    @media screen and (min-width:768px) {
        .left-polygon-blue {
            position: absolute;
            top: 55% !important;
            left: -2% !important;
            width: 8%;
            /* z-index: -1; */
            display: block;
        }

        .right-polygon-orange {
            position: absolute;
            top: 64%;
            right: 0px;
            width: 8%;
            /* z-index: -1; */
            display: block;
        }

    }

    .reg-box {
        background: linear-gradient(73.58deg, #04376D 1.64%, #2762A1 88.81%) !important;
        border-radius: 16px;
    }

    .reg-box p {
        color: white !important;
    }

    .reg-box p a {
        background: transparent !important;
        box-shadow: none !important;
        border: none !important;
    }

    .right-inner {
        position: relative;

    }

    .right-inner img {
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

        .right-inner img {
            position: absolute;
            right: 0px;
            padding: 12px 12px;
            width: 40px;
            z-index: 999;
            top: 5px;
        }
    }

    .forgot-psd a {
        text-decoration: none;
        padding: 0px !important;
        background: transparent !important;
        color: #F89822 !important;
        margin: 0px !important;
        font-size: 22px !important;
        box-shadow: none !important;
        border: none !important;
    }

    @media screen and (max-width:767px) {
        .forgot-psd a {
            text-decoration: none;
            padding: 0px !important;
            background: transparent !important;
            color: #F89822 !important;
            margin: 0px !important;
            font-size: 16px !important;
        }
    }

    @media screen and (max-width:576px) {

        .forgot-psd a {
            text-decoration: none;
            padding: 0px !important;
            background: transparent !important;
            color: #F89822 !important;
            margin: 0px !important;
            font-size: 14px !important;
        }
    }

    .otp-form input {
        display: inline-block;
        width: 50px;
        height: 50px;
        text-align: center;
        border-radius: 10px;
        border: none;
    }

    .otp-form input:active,
    .otp-form input:focus {
        border: none;
        box-shadow: none;
        outline: none;
    }
    .loginBtn_s{
        text-decoration: none !important;
        background-color: #001933 !important;
        color: white !important;
        width: 100% !important;
        padding: 14px 0px !important;
        font-size: 28px !important;
        font-weight: bold !important;
    }
</style>
@section('content')
    @include('includes.website.navbar')
    <div class="container-fluid  px-0 outer-wrapper">
        <div class="inner-wrapper inner-wrapper-main">
            <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
            <div class="detail-box-outer pt-5  px-3">
                <div class="detail-box amount-box">
                    <div class="main-form-section-content pb-4">
                        <h1>Your <span>Details</span></h1>
                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}"
                                alt="image">
                        </div>
                        <div class="network-text d-flex">
                            <h1 class="number_d">{{$number}}</h1>

                        </div>
                        <div class="network-button pl-2 pl-lg-5">
                            <button data-toggle="modal" data-target="#number-modal"><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}"
                                    alt="image"></button>
                        </div>

                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/awcc.svg') }}"
                                alt="image">
                        </div>
                        <div class="network-text d-flex">
                            <h1>AWCC</h1>

                        </div>
                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/profile-icon.svg') }}"
                                alt="image">
                        </div>
                        <div class="network-text d-flex">
                            <h1>Amin Top-Up</h1>

                        </div>
                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/msg-icon.svg') }}"
                                alt="image">
                        </div>
                        <div class="network-text d-flex amin-gmail">
                            <h1>amintopup@gmail.com</h1>

                        </div>
                    </div>


                </div>
                <div class="detail-box-bottom text-right">
                    <h1>250 <span>AFN</span></h1>
                </div>
            </div>


            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>

        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}"
            alt="image">
    </div>
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg"
        version="1.1">
        <defs>
            <filter id="goo">
                <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
                <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 39 -9"
                    result="goo" />
                <feComposite in="SourceGraphic" in2="goo" operator="atop" />
            </filter>
        </defs>
    </svg>
    <div class="info-section-two container-fluid px-0 ">
        <div class="amount-section container">
            <div class="row">
                <div class="col-md-12">
                    <div class="amount-heading col-12 col-md-6 px-0">
                        <h1>Join Amin Top-Up <span>to continue</span></h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="reg-box my-3 my-lg-5">
                        <form class="pt-5" method="POST" action="{{route('inwebLogin')}}" enctype="multipart/form-data">
                            @csrf
                            @error('email')
                                <div class="alert alert-danger alert-dismissible fade show login-email-field" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            @error('password')
                                <div class="alert alert-danger alert-dismissible fade show login-email-field" role="alert">
                                    {{ $message }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @enderror
                            @if (Session::has('message'))
                                <div class="alert alert-danger alert-dismissible fade show login-email-field" role="alert">
                                    {{ Session::get('message') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                            @endif
                            <div class="form-group form-field right-inner">
                                <img src="{{ asset('assets/website-images/message-icon.svg') }}" alt="icon">
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" name="email" placeholder="enter your email">
                            </div>
                            <div class="form-group form-field right-inner">
                                <img src="{{ asset('assets/website-images/eye.svg') }}" onclick="viewPsd()" alt="icon"
                                    style="cursor: pointer">
                                <input type="password" class="form-control" id="loginpassword" name="password"
                                    placeholder="enter your password">
                                <input type="hidden" class="form-control numberInput_d" name="number">
                            </div>
                            <!-- <a href="" type="submit" class="btn mt-3 mt-lg-4">LOG IN</a> -->
                            <button type="submit" class=" mt-3 mt-lg-4 loginBtn_s" >LOG IN</button>
                        </form>
                        <div class="text-right forgot-psd mb-3 mb-lg-4">
                            <a href="#" id="forgot-btn">Forgot Password</a>
                        </div>
                        <p class="py-3">Don't have account?<a href="{{url('signup')}}"><span>Sign Up</span></a>
                        </p>
                    </div>
                </div>
            </div>
            <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}"
                alt="image">
            <img class="right-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}"
                alt="image">
        </div>
    </div>
    <div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content email-modal-content">
                <div class="modal-body email-modal-body  text-center py-sm-3">
                    <h1>Forgot <span>Password</span> </h1>
                    <p class="py-2 py-sm-3">Enter your email for the verification proccess, we will send 4 digits code to
                        your email.</p>
                    <form class="py-2 py-sm-4">
                        <div class="form-group form-field right-inner">
                            {{-- <img src="{{ asset('assets/website-images/message-icon.svg') }}" alt="icon"> --}}
                            <input type="email" class="form-control" id="exampleInputEmail1"
                                aria-describedby="emailHelp" placeholder="enter your email">
                        </div>
                        <a href="#" class="btn mt-sm-3 email-modal-btn" id="email-btn">Continue</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="otp-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content email-modal-content">
                <div class="modal-body email-modal-body  text-center py-sm-3">
                    <h1>Enter <span>4 Digits</span> Code </h1>
                    <p class="py-2 py-sm-3">Enter the 4 digits code that you received on your email.</p>
                    <form class="py-2 py-sm-4 otp-form">
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(1)'
                            maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(2)'
                            maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)' onkeyup='tabChange(3)'
                            maxlength=1>
                        <input class="otp" type="text" oninput='digitValidate(this)'onkeyup='tabChange(4)'
                            maxlength=1>

                    </form>
                    <a href="{{ url('forgot') }}" class="btn mt-sm-3 col-12 email-modal-btn" >Continue</a>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="number-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">
                <h1>Your <span>Details</span> </h1>
         
                <form class="py-2 py-sm-4">
                    <div class="form-group form-field right-inner">

                        <input type="text" class="form-control" 
                            aria-describedby="emailHelp" value="93 70 00 00 000" placeholder="Type here">
                    </div>
                    <a href="#" class="btn mt-sm-3 email-modal-btn" >Update</a>
                </form>
            </div>
        </div>
    </div>
</div>
    @include('includes.website.footer-navbar')
@endsection

@section('insertjavascript')
<script>
    $(document).ready(function() {
        $("#forgot-btn").click(function() {
            $("#email-modal").modal('show');
        });
        $("#email-btn").click(function() {
            $("#email-modal").modal('hide');
            $("#otp-modal").modal('show');
        });
        let num = $(".number_d").text();
        $(".numberInput_d").val(num);
    })
</script>
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
    <script>
        let digitValidate = function(ele) {
            console.log(ele.value);
            ele.value = ele.value.replace(/[^0-9]/g, '');
        }

        let tabChange = function(val) {
            let ele = document.querySelectorAll('.otp');
            if (ele[val - 1].value != '') {
                ele[val].focus()
            } else if (ele[val - 1].value == '') {
                ele[val - 2].focus()
            }
        }
    </script>

@endsection
