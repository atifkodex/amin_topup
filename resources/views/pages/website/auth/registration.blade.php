@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>

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
    .amount-section{
        width: 70% !important;
    }

    }
    @media screen and (max-width:767px){
        .amount-section{
        width: 80% !important;
    }
    }
    @media screen and (max-width:576px){
        .amount-section{
        width:100% !important;
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
                       <a href="" class="btn my-3 my-lg-4">LOG IN</a> 
                       <a href="" class="btn my-3 my-lg-4">SIGN IN</a>
                       <p class="py-3">By continuing you agree to our <span>Terms & Conditions and Privacy policy </span> </p> 
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
   
@endsection
