@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
    .right-inner {
        position: relative;

    }

    .right-inner img {
        position: absolute;
        right: 0px;
        padding: 12px 12px;
        width: 50px;
        height: 50px;
        z-index: 999;
        top: 25px;
    }

    .form-field label:first-of-type {
        color: #3F4765 !important;
        font-size: 16px !important;
        font-weight: 500;
        margin-bottom: 0px
    }

    .number-bottom-label {
        color: #3F4765 !important;
        font-size: 10px !important;
        font-weight: normal !important;
    }

    @media screen and (max-width:576px) {

        .right-inner img {
            position: absolute;
            right: 0px;
            padding: 12px 12px;
            width: 45px;
            height: 45px;
            z-index: 999;
            top: 23px;
        }

        .form-field label:first-of-type {
            color: #3F4765 !important;
            font-size: 14px !important;
            font-weight: 500;
            margin-bottom: 0px
        }
    }

    .info-section-two {
        position: relative;
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
            /* z-index: -1; */
            display: block;
        }

        .right-polygon-orange {
            position: absolute;
            top: 8px;
            right: 16px;
            width: 8%;
            /* z-index: -1; */
            display: block;
        }

    }

    .form-field textarea {
        resize: none;
        border: 1px solid #CDCCCE;
        border-radius: 5px;
        height: 250px !important;
    }

    @media screen and (max-width:767px) {
        .form-field textarea {
            height: 200px !important;
        }

        .contact-form-heading h1 {
            color: #F89822;
            font-size: 30px !important;
            font-weight: bold;
        }
    }

    @media screen and (max-width:576px) {
        .form-field textarea {
            height: 120px !important;
        }

        .contact-form-heading h1 {
            color: #F89822;
            font-size: 25px !important;
            font-weight: bold;
        }

    }



    .form-field textarea:active,
    .form-field textarea:focus {
        resize: none;
        outline: none;
        box-shadow: none;
        border: none
    }

    .contact-form-heading p {
        text-align: left !important;
        color: black !important;
        font-size: 14px !important;
        width: 100% !important;
        font-size: 18px;
    }

    .contact-form-heading h1 {
        color: #F89822;
        font-size: 40px;
        font-weight: bold;
    }

    .contact-btn {
        width: 50% !important;
    }

    .form-field input {
        padding: 0px !important;
        height: 40px !important;
        padding-right: 50px !important;
    }

    @media screen and (max-width:576px) {
        .contact-btn {
            width: 100% !important;
        }

        .form-field input {

            height: 30px !important
        }
    }

    .form-field {
        background: white;
        border-radius: 5px;
        padding: 5px 10px;
    }

    .privacy-content-item h1 {
        color: #F89822;
        font-size: 30px;
    }

    .privacy-content-item p {
        color: black;
        font-size: 22px;
    }

    @media screen and (max-width:991px) {
        .privacy-content-item h1 {
            color: #F89822;
            font-size: 25px;
        }

        .privacy-content-item p {
            color: black;
            font-size: 20px;
        }
    }

    @media screen and (max-width:767px) {
        .privacy-content-item h1 {
            color: #F89822;
            font-size: 22px;
        }

        .privacy-content-item p {
            color: black;
            font-size: 18px;
        }
    }

    @media screen and (max-width:576px) {
        .privacy-content-item h1 {
            color: #F89822;
            font-size: 20px;
        }

        .privacy-content-item p {
            color: black;
            font-size: 16px;
        }
    }
</style>
@section('content')
@include('includes.website.navbar')
<div class="container-fluid outer-wrapper">
    <div class="inner-wrapper">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="inner-wrapper-heading">
            <h1>About Us</h1>
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
<div class="info-section-two container-fluid px-0 my-3 my-md-2">
    <div class="amount-section container">
        <div class="row">
            <div class="col-12 privacy-content-item pb-md-4">
                <h1>About us</h1>
                <p>Amin Topup is a mobile application that facilitates transferring prepaid Mobile Topup/Airtime to customers’ phone numbers using online payment. Amin Topup services are provided by Amin Technologies Inc, a US company based in Delaware, USA.</p>
                <p>We are currently partnered with Identity Infotech (IIT), one of the leading prime Topup aggregators of Afghanistan, for providing mobile Topup to local Afghanistan numbers using IIT’s API. Through IIT’s API, Amin Topup can provide direct and secure recharge to Etisalat Afghanistan, MTN Afghanistan, Roshan Telecom, AWCC, Afghan Telecom and Salaam Telecom.</p>
                <p>Anywhere in the world, you can simply send Topup to any phone number fast and easily.</p>
            </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
    </div>
</div>
<div class="info-section-two container-fluid px-0 ">
    <div class="info-section-two-wrapper  container ">
        <div class="row py-3">
            <div class="col-md-7 info-section-two-right  justify-content-end order-2 order-md-12">
                <div class="info-section-two-right-content pl-md-5">
                    <h1>Send money to almost anywhere in the world from </h1>
                    <p>Get the Amin Top-Up App for the fastest, easiest way to top-up any phone.</p>
                    <div class="banner-content-button d-flex justify-content-center justify-content-md-start">
                        <a href="#" class="mr-1 mr-sm-3">
                            <button class="d-flex button-1">
                                <img src="{{ asset('assets/website-images/apple.svg') }}">
                                <div class="button-inner">
                                    <span>Get It On</span>
                                    <br>
                                    <span>App Store</span>
                                </div>

                            </button>
                        </a>
                        <a href="#">
                            <button class="d-flex button-1">
                                <img src="{{ asset('assets/website-images/playstore.svg') }}">
                                <div class="button-inner">
                                    <span>Get It On</span>
                                    <br>
                                    <span>Play Store</span>
                                </div>

                            </button>
                        </a>

                    </div>
                </div>
            </div>
            <div class="col-md-5 info-section-two-left text-center py-1 py-md-4 order-1 order-md-12">
                <img class="mobile-image-left" src="{{ asset('assets/website-images/person-animated.svg') }}" alt="image">
            </div>

        </div>
    </div>
    <img class="left-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
</div>
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
<script>
    $('.file-upload').on('click', function(e) {
        e.preventDefault();
        $('#file-input').trigger('click');
    });
</script>
@endsection