@extends('layouts.website.default')

<style>
    .amount-section {
        background: #F0F7FF;
        border-radius: 16px;
    }

    .lefts-polygon-two,
    .left-polygon-blue,
    .right-polygon-orange,
    .rights-polygon-two {
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

        .rights-polygon-two {
            position: absolute;
            bottom: 0% !important;
            right: 16px;
            width: 11% !important;
            z-index: 1;
            display: block;
        }

        .left-polygon-blue {
            position: absolute;
            top: 8% !important;
            left: 0% !important;
            width: 8%;
            / z-index: -1;/ display: block;
        }

        .right-polygon-orange {
            position: absolute;
            top: 8px;
            right: 16px;
            width: 8%;
            / z-index: -1;/ display: block;
        }

    }

    .inner-wrapper {
        position: relative;
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

    .mbsc-ios.mbsc-textfield-box {
        border-radius: 5px !important;
    }

    @media screen and (min-width:991px) {
        .mbsc-ios.mbsc-select-icon-stacked {
            top: 20px !important;
        }
    }

    @media screen and (max-width:991px) {
        .form-field .mbsc-ios.mbsc-textfield-box {
            height: 55px;
        }
    }

    @media screen and (max-width:576px) {

        .form-field .mbsc-ios.mbsc-textfield-box {
            height: 50px;

        }
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





    @media screen and (max-width:576px) {
        .amount-section {
            width: 100% !important;
        }

        .right-inner img {
            position: absolute;
            right: 0px;
            padding: 12px 12px;
            width: 40px;
            z-index: 999;
            top: 5px;
        }
    }

    .iti {
        position: relative;
        display: inline-block;
        width: 100%;
    }

    .iti__country-list {
        border-radius: 20px !important;
        border: none;
        overflow-y: hidden !important;
    }

    .loginBtn_s {
        text-decoration: none !important;
        background-color: #F89822 !important;
        color: black !important;
        width: 100% !important;
        padding: 10px 0px !important;
        font-size: 26px !important;
        font-weight: bold !important;
        border: none !important;
    }
</style>
@section('content')
@include('includes.website.navbar')
<!-- <div class="container-fluid  px-0 outer-wrapper">
    <div class="inner-wrapper inner-wrapper-main">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="detail-box-outer pt-5  px-3">
            <div class="detail-box amount-box">
                <div class="main-form-section-content pb-4">
                    <h1>Your <span>Details</span></h1>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3">
                    <div class="network-icon">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}" alt="image">
                    </div>
                    <div class="network-text d-flex">
                        <h1 class="number_d">93 70 00 00 000</h1>

                    </div>
                    <div class="network-button pl-2 pl-lg-5">
                        <button data-toggle="modal" data-target="#number-modal"><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}" alt="image"></button>
                    </div>

                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3">
                    <div class="network-icon">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/awcc.svg') }}" alt="image">
                    </div>
                    <div class="network-text d-flex">
                        <h1 class="network_d">AWCC</h1>

                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3">
                    <div class="network-icon">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/profile-icon.svg') }}" alt="image">
                    </div>
                    <div class="network-text d-flex">
                        <h1 class="name_d">Amin Top-Up</h1>

                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3">
                    <div class="network-icon">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/msg-icon.svg') }}" alt="image">
                    </div>
                    <div class="network-text d-flex amin-gmail">
                        <h1 class="mail_d">amintopup@gmail.com</h1>

                    </div>
                </div>


            </div>
            <div class="detail-box-bottom text-right">
                <h1 class="amount_d">250 <span>AFN</span></h1>
            </div>
        </div>


        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>

    </div>
    <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
    <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
</div>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 39 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
        </filter>
    </defs>
</svg>
<div class="info-section-two container-fluid px-0">
    <div class="amount-section container">
        <div class="row">
            <div class="col-md-12">
                <div class="amount-heading col-12 col-md-6 px-0">
                    <h1>Join Amin Top-Up <span>to continue</span></h1>
                </div>
            </div>
            <div class="col-12">
                <div class="reg-box my-3 my-lg-5">
                    <form class="pt-5" method="POST" action="{{route('inwebSignup')}}" enctype="multipart/form-data">
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
                        @error('phone_number')
                        <div class="alert alert-danger alert-dismissible fade show login-email-field" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @enderror
                        @error('country')
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
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email">
                        </div>
                        <div class="form-group form-field right-inner">
                            <img src="{{ asset('assets/website-images/eye.svg') }}" onclick="viewPsd()" alt="icon" style="cursor: pointer">
                            <input type="password" class="form-control" id="loginpassword" name="password" placeholder="enter your password">
                        </div>
                        <div class="form-group form-field">
                            <input type="number" class="form-control" placeholder="" name="phone_number" id="telephone">
                        </div>
                        <div class="form-group form-field">
                            <label class="mx-0">
                                Countries
                                <input mbsc-input id="demo-country-picker" name="country" data-dropdown="true" data-input-style="box" data-label-style="stacked" placeholder="Please select..." />
                            </label>
                        </div>
                        <input type="hidden" name="users_device" value="web">
                        <input type="hidden" name="number" class="numberInput_d" value="web">
                        <button type="submit" class=" mt-3 mt-lg-4 loginBtn_s">SIGN UP</button>
                    </form>
                    <p class="py-3">Already have an account?<a href="{{url('login')}}"><span> Log In</span></a>
                    </p>
                </div>
            </div>
        </div>
        <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
        <img class="right-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
    </div>
</div>
<div class="modal fade" id="number-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">
                <h1>Your <span>Details</span> </h1>

                <form class="py-2 py-sm-4">
                    <div class="form-group form-field right-inner">

                        <input type="text" class="form-control" aria-describedby="emailHelp" value="93 70 00 00 000" placeholder="Type here">
                    </div>
                    <a href="#" class="btn mt-sm-3 email-modal-btn">Update</a>
                </form>
            </div>
        </div>
    </div>
</div> -->

<div class="container-fluid outer-wrapper">
    <div class="inner-wrapper">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="inner-wrapper-heading container">
            <h1>Your</h1>
            <h1>Details</h1>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>

</div>
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
        </filter>
    </defs>
</svg>
<div class="info-section-two container-fluid px-0">
    <div class="amount-section container mb-5">
        <div class="pt-5">
            <div class="detail-box amount-box my-3">
                <div class="network-list mb-1 d-flex align-items-center justify-content-between pb-3">
                    <div class="network-icon network-item text-left">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}" alt="image">
                    </div>
                    <div class="network-text network-item  amin-gmail">
                        <h1 class="number_d">93 70 00 00 000</h1>
                    </div>
                    <div class="network-button network-item text-right">
                        <button data-toggle="modal" data-target="#number-modal"><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}" alt="image"></button>
                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3 justify-content-between">
                    <div class="network-icon network-item text-left">
                        <img class="network-icon-image networkImage" src="{{ asset('assets/website-images/awcc.svg') }}" alt="image">
                    </div>
                    <div class="network-text network-item amin-gmail">
                        <h1 class="network_d">AWCC</h1>
                    </div>
                    <div class="network-button network-item invisible text-right">

                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3 justify-content-between">
                    <div class="network-icon network-item">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/profile-icon.svg') }}" alt="image">
                    </div>
                    <div class="network-text network-item amin-gmail">
                        <h1 class="name_d">Amin Top-Up</h1>
                    </div>
                    <div class="network-button network-item invisible text-right">

                    </div>
                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3 justify-content-between emailDiv">
                    <div class="network-icon network-item">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/msg-icon.svg') }}" alt="image">
                    </div>
                    <div class="network-text  amin-gmail network-item">
                        <h1 class="mail_d">amintopup@gmail.com</h1>
                    </div>
                    <div class="network-button network-item invisible text-right">

                    </div>
                </div>
            </div>
        </div>
        <div class="tax-section pb-5 container px-0">
            <div class="tax-section-left">
                <h1>Recevier gets</h1>
                <p>(<span> afterTax </span>)</p>
            </div>
            <div class="tax-section-right">
                <h1 class="amount_d">250</h1>
                <p>AFN</p>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-sm-8 pl-md-5">
                <div class="amount-heading px-0">
                    <h1>Join Amin Top-Up <span>to continue</span></h1>
                </div>
            </div>
            <div class="col-12">
                <div class="reg-box my-3 my-lg-5">
                    <form class="pt-5" method="POST" action="{{route('inwebSignup')}}" enctype="multipart/form-data">
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
                        @error('phone_number')
                        <div class="alert alert-danger alert-dismissible fade show login-email-field" role="alert">
                            {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @enderror
                        @error('country')
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
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="enter your email">
                        </div>
                        <div class="form-group form-field right-inner">
                            <img src="{{ asset('assets/website-images/eye.svg') }}" onclick="viewPsd()" alt="icon" style="cursor: pointer">
                            <input type="password" class="form-control" id="loginpassword" name="password" placeholder="enter your password">
                        </div>
                        <div class="form-group form-field">
                            <input type="number" class="form-control" placeholder="" name="phone_number" id="telephone">
                        </div>
                        <div class="form-group form-field">
                            <label class="mx-0">
                                Countries
                                <input mbsc-input id="demo-country-picker" name="country" data-dropdown="true" data-input-style="box" data-label-style="stacked" placeholder="Please select..." />
                            </label>
                        </div>
                        <input type="hidden" name="users_device" value="web">
                        <input type="hidden" name="number" class="numberInput_d" value="web">
                        <button type="submit" class=" mt-3 mt-lg-4 loginBtn_s">SIGN UP</button>
                    </form>
                    <form class="pt-5" method="POST" id="goToLoginPage_d" action="{{route('gotologinpage')}}" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" class="numberInput" name="number" value="">
                    </form>
                    <p class="py-3">Already have an account?<a href="javascript:void(0)" class="loginBtn_d"><span>Log In</span></a>
                    </p>
                </div>
            </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
        <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
        <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
    </div>
</div>
<div class="modal fade" id="number-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">
                <h1>Your <span>Details</span> </h1>

                <form class="py-2 py-sm-4">
                    <div class="form-group form-field right-inner">

                        <input type="text" class="form-control" aria-describedby="emailHelp" value="93 70 00 00 000" placeholder="Type here">
                    </div>
                    <a href="#" class="btn mt-sm-3 email-modal-btn">Update</a>
                </form>
            </div>
        </div>
    </div>
</div>
@include('includes.website.footer-navbar')
@endsection

@section('insertjavascript')
<script src="{{ asset('assets/js/intlTelInput.min.js') }}"></script>
<script src="{{ asset('assets/js/intlTelInput-jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/mobiscroll.jquery.min.js') }}"></script>
<script>
    mobiscroll.setOptions({
        theme: 'ios',
        themeVariant: 'light'
    });

    $(function() {
        var inst = $('#demo-country-picker').mobiscroll().select({
            display: 'anchored',
            filter: true,
            itemHeight: 40,
            renderItem: function(item) {
                return '<div class="md-country-picker-item">' +
                    '<img class="md-country-picker-flag" src="https://img.mobiscroll.com/demos/flags/' + item.data.value + '.png" />' +
                    item.display + '</div>';
            }
        }).mobiscroll('getInst');

        $.getJSON('https://trial.mobiscroll.com/content/countries.json', function(resp) {
            var countries = [];
            for (var i = 0; i < resp.length; ++i) {
                var country = resp[i];
                countries.push({
                    text: country.text,
                    value: country.value
                });
            }
            inst.setOptions({
                data: countries
            });
        });
    });
</script>
<script>
    var input = document.querySelector("#telephone");
    window.intlTelInput(input, ({
        utilsScript: "{{ asset('assets/js/utils.js') }}",

    }));
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
    $(document).ready(function() {
        let num = localStorage.getItem('receiverNum');
        let network = localStorage.getItem('receiverNetwork');
        let mail = localStorage.getItem('receiverEmail');
        if (mail == "") {
            $(".emailDiv").addClass('invisible');
        }
        let name = localStorage.getItem('receiverName');
        let amount = localStorage.getItem('denomination');
        let percentage = (amount * 10) / 100;
        let amountAfterTax = amount - percentage;
        let networkImage = localStorage.getItem('networkImage');

        $(".number_d").text(num);
        $(".numberInput").val(num);
        $(".network_d").text(network);
        $(".mail_d").text(mail);
        $(".name_d").text(name);
        $(".amount_d").text(amountAfterTax);
        $(".numberInput_d").val(num);
        $(".networkImage").attr('src', networkImage);

        $('.loginBtn_d').click(function() {
            $("#goToLoginPage_d").submit();
        });
    });
</script>
@endsection