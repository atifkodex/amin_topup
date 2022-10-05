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
   
  
</style>
@section('content')
    @include('includes.website.navbar')
    <div class="container-fluid outer-wrapper">
        <div class="inner-wrapper">
            <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
            <div class="inner-wrapper-heading">
                <h1>Order</h1>
                <h1>Summary</h1>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>
      
    </div>
    <div class="info-section-two container-fluid px-0 my-3 my-md-2">
        <div class="amount-section container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="reg-box my-3 my-lg-5">
                        <div class="order-summary-content ">
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Number</p></div>
                            <div class="order-summary-list-right"><p>+93 700 00 00 000</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Country</p></div>
                            <div class="order-summary-list-right"><p>Afghanistan</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Network</p></div>
                            <div class="order-summary-list-right"><p>AWCC</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Topup Amount</p></div>
                            <div class="order-summary-list-right"><p>200 ANF</p></div>
                          </div>
                          <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3">
                            <div class="order-summary-list-left"> <p class="pl-2">Recevier Gets (After Tax)</p></div>
                            <div class="order-summary-list-right"><p>200 ANF</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Topup Amount:</p></div>
                            <div class="order-summary-list-right"><p>7.49 USD</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Processing fee:</p></div>
                            <div class="order-summary-list-right"><p>3.52 USD</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Total:</p></div>
                            <div class="order-summary-list-right"><p>#12450</p></div>
                          </div>
                          <div class="order-summary-list px-0 py-2 py-md-3 px-xl-4">
                            <div class="order-summary-list-left"> <p>Paid Amount</p></div>
                            <div class="order-summary-list-right"><p>11.01 USD</p></div>
                          </div>
                          <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3">
                            <div class="order-summary-list-left"> <p class="pl-2">Total Payable:</p></div>
                            <div class="order-summary-list-right"><p>11.01 USD</p></div>
                          </div>
                        </div>
                        <p class="py-3 summary-text">Amin Topup uses third party payment gateway for facilitating payments. We are not saving your payment information in our system </p> 
                       <a href="" class="btn my-3 my-lg-4 summary-btn">Pay by Credit Card</a>
                       
                    </div>
                </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
        <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
        <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
    </div>
    </div>
    @include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
   
@endsection
