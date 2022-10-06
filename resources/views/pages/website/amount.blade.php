@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
           .left-polygon-blue,.right-polygon-orange{
        display: none
    }
    .inner-wrapper{
        position: relative;
    }
    @media screen and (min-width:768px){
    .left-polygon-blue{
        position: absolute;
        top:55% !important;
        left: -2% !important;
        width:8%;
        /* z-index: -1; */
        display: block;
    }
    .right-polygon-orange{
        position: absolute;
        top:64%;
        right: 0px;
        width: 8%;
        /* z-index: -1; */
        display: block;
    }

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
    @media screen and (min-width:768px){
        .lefts-polygon-two {
        position: absolute;
        bottom: 0% !important;
        left: 0% !important;
        width: 13%;
        z-index: -1;
        display: block;
    }
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
                            <h1>93 70 00 00 000</h1>
    
                        </div>
                        <div class="network-button pl-2 pl-lg-5">
                            <button><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}"
                                    alt="image"></button>
                        </div>
    
                    </div>
                    <div class="network-list mb-1 d-flex align-items-center pb-3">
                        <div class="network-icon">
                            <img class="network-icon-image" src="{{ asset('assets/website-images/awcc.svg') }}" alt="image">
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
                 <div class="detail-box-bottom text-right invisible">
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
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
    </div>
    <div class="info-section-two container-fluid px-0  pb-5">
        <div class="amount-section  container">
            <div class="row">
                <div class="col-md-12">
                    <div class="amount-heading col-12 col-lg-6 px-0">
                        <h1>Choose an amount to <span>continue</span></h1>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="amount-card">
                        <p>Recevier:befor AIT</p>
                        <h1>100 AFN</h1>
                        <p>Free fee,total: $7.46USD</p>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="amount-card">
                        <p>Recevier:befor AIT</p>
                        <h1>100 <span>AFN</span></h1>
                        <p>Free fee,total: $7.46USD</p>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="amount-card">
                        <p>Recevier:befor AIT</p>
                        <h1>100 <span>AFN</span></h1>
                        <p>Free fee,total: $7.46USD</p>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="amount-card">
                        <p>Recevier:befor AIT</p>
                        <h1>100 <span>AFN</span></h1>
                        <p>Free fee,total: $7.46USD</p>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="amount-card active">
                        <p>Recevier:befor AIT</p>
                        <h1>100 <span>AFN</span></h1>
                        <p>Free fee,total: $7.46USD</p>
                    </div>
                </div>
                <div class="col-md-6 py-3">
                    <div class="amount-card">
                        <p>Recevier:befor AIT</p>
                        <h1>100 <span>AFN</span></h1>
                        <p>Free fee,total: $7.46USD</p>
                    </div>
                </div>

            </div>
        </div>
        <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
        <img class="right-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
    </div>
    @include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
    <script>
        $(".hero-section").css("margin-bottom", "10%");
    </script>
@endsection
