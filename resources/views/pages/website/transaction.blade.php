@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>

    .info-section-two {
        position: relative;
    }

  
    .lefts-polygon-two,.left-polygon-blue,.right-polygon-orange,.rights-polygon-two  {
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
    .rights-polygon-two{
        position: absolute;
        bottom: 0% !important;
        right: 16px;
        width: 11% !important;
        z-index: 1;
        display: block;
    }
    .left-polygon-blue{
        position: absolute;
        top: 8% !important;
        left: 0% !important;
        width:8%;
        /* z-index: -1; */
        display: block;
    }
    .right-polygon-orange{
        position: absolute;
        top: 8px;
        right: 16px;
        width: 8%;
        /* z-index: -1; */
        display: block;
    }

    }
    .date-time p span{
        font-size: 16px !important;
        color: black !important;
    }
    @media screen and (max-width:376px){
        .date-time p span{
        font-size: 12px !important;
        color: black !important;
    }
    }
   
  
</style>
@section('content')
    @include('includes.website.navbar')
    <div class="container-fluid outer-wrapper">
        <div class="inner-wrapper">
            <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
            <div class="inner-wrapper-heading">
                <h1>Transaction</h1>
                <h1>Status</h1>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
      
    </div>
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
              <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />    
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 19 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
              </filter>
          </defs>
      </svg>
    <div class="info-section-two container-fluid px-0 my-3 my-md-2">
        <div class="amount-section container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="reg-box my-3 my-lg-5">
                        <div class="order-summary-content pb-2 pb-md-4">
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Recevier Phonee Number</p></div>
                            <div class="order-summary-list-right"><p>+93 700 00 00 000</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Recevier Name</p></div>
                            <div class="order-summary-list-right"><p>Muhammad Ali</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Recevier Email</p></div>
                            <div class="order-summary-list-right"><p>ali215@gmail.com</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Network</p></div>
                            <div class="order-summary-list-right"><p>AWCC</p></div>
                          </div>
                    
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Topup Amount</p></div>
                            <div class="order-summary-list-right"><p>205 ANF</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Recharger Date & Time</p></div>
                            <div class="order-summary-list-right date-time"><p>08/17/2022 <span>05:00 pm</span></p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Transaction ID</p></div>
                            <div class="order-summary-list-right"><p>#12450</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Paid Amount</p></div>
                            <div class="order-summary-list-right"><p>11 ANF</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Status of Transmission</p></div>
                            <div class="order-summary-list-right "><p class="text-success">Success</p></div>
                          </div>
                      
                        </div>
                       
                       <a href="" class="btn my-3 my-lg-4 ">Share</a>
                       <a href="" class="btn my-3 my-lg-4 ">Download</a>
                       
                    </div>
                </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
   
        <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
    </div>
    </div>
    <div class="info-section-two container-fluid px-0 ">
        <div class="info-section-two-wrapper  container-fluid ">
            <div class="row py-3">
                <div class="col-md-7 info-section-two-right d-flex justify-content-end order-2 order-md-12">
                    <div class="info-section-two-right-content pl-md-5">
                        <h1>Send money to almost anywhere in the world from  </h1>
                        <p>Get the Amin Top-Up App for the fastest, easiest way to top-up any phone.</p>
                        <div class="banner-content-button d-flex justify-content-center justify-content-md-start">
                            <a href="#" class="mr-1 mr-sm-3">
                                <button class="d-flex button-1">
                                    <img src="{{asset('assets/website-images/apple.svg')}}">
                                    <div class="button-inner">
                                        <span>Get It On</span>
                                        <br>
                                        <span>App Store</span>
                                    </div>
                                   
                                </button>
                            </a>
                            <a href="#">
                                <button class="d-flex button-1">
                                    <img src="{{asset('assets/website-images/playstore.svg')}}">
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
                    <img class="mobile-image-left" src="{{ asset('assets/website-images/person-animated.svg') }}"
                    alt="image">
                </div>
               
            </div>
        </div>
        <img class="left-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}"
        alt="image">
    </div>
    @include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
   
@endsection
