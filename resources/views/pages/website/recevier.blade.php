@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
@section('content')
    @include('includes.website.navbar')
    <div class="container-fluid hero-section main-section rec-section">
        <img class="hero-image main-image" src="{{ asset('assets/website-images/heross.svg') }}" alt="image">
        <div class="main-form-section main-centered">
            <div class="detail-box">
                <div class="main-form-section-content">
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
                        <button><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}" alt="image"></button>
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
           
                 
            </div>








            <form class="main-form ">
                <div class="form-group form-heading">
                   <h1 class="text-left">Add Recevier Detail</h1>
                </div>
                <div class="form-group right-inner-addon">
                    <img src="{{ asset('assets/website-images/person-icon.svg') }}" alt="icon">
                    <input type="text" class="form-control" placeholder="" value="">
                </div>
                <div class="form-group right-inner-addon">
                    <img src="{{ asset('assets/website-images/message-icon.svg') }}" alt="icon">
                    <input type="text" class="form-control" placeholder="" value="">
                </div>
                <button type="submit" class="btn form-control  mt-3">Continue</button>
            </form>
        </div>
        <img class="hero-image-left" src="{{ asset('assets/website-images/left-polygon.svg') }}" alt="image">
        <img class="hero-image-right" src="{{ asset('assets/website-images/right-polygon.svg') }}" alt="image">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </div>
   
    @include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
@endsection
