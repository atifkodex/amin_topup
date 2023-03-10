@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
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

    .reg-box {
        background: white !important;
    }

    .order-summary-list-box {

        background: #F0F7FF !important;
    }

    .order-summary-list {
        /* flex-direction: column !important; */
        display: flex !important;
        justify-content: space-between !important;
    }
</style>
@section('content')
@include('includes.website.navbar')
<div class="container-fluid outer-wrapper">
    <div class="inner-wrapper">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="report-top-heading container d-none">
            <div class="row justify-content-md-center pt-3">
                <div class="col-2 col-md-3 col-lg-2 report-top">
                    <a href="">All</a>
                </div>
                <div class="col-5 col-md-3 col-lg-2 report-top">
                    <a href="">Success Top-up</a>
                </div>
                <div class="col-5 col-md-3 col-lg-2 report-top">
                    <a href="">Cancel Top-up</a>
                </div>
            </div>
        </div>
        <div class="inner-wrapper-heading d-flex justify-content-between container">
            <div class="report-header-left">
                <h1>TopUp</h1>
                <h1>Report</h1>
            </div>
            <div class="report-header-right">
                <h1>Total TopUp</h1>
                @if(isset($data))
                <h1>{{$data['totalTopupAmount']}}</h1>
                @else
                <h1>0.00</h1>
                @endif

                <h1>AFN</h1>
            </div>
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
@if(isset($data))
<div class="info-section-two container-fluid px-0">
    <div class="amount-section container">
        <div class="row">
            <div class="col-12 report-card-wrapper">
                <div class="reg-box px-0">
                    <div class="order-summary-content ">
                        @foreach($data['allTopups'] as $topup)
                        <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3 topupData_d" style="cursor:pointer" id="{{$topup['id']}}">
                            <div class="order-summary-list-left d-flex align-items-center">
                                <div class="report-profile">
                                    @if($topup['receiver_image'] == null)
                                    <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                    @else
                                    <img class="profile-img" src="{{ $topup['receiver_image'] }}" alt="image">
                                    @endif
                                    <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                </div>

                                <div class="report-list pl-3">
                                    <h1>{{$topup['receiver_name']}}</h1>
                                    <h1>{{$topup['receiver_number']}}</h1>
                                    <h1>{{$topup['created_at']}}</h1>
                                </div>
                            </div>
                            <div class="order-summary-list-right text-center report-right">
                                <p>{{$topup['topup_amount']}} ANF</p>
                                @if($topup['status'] == 1)
                                <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                @else
                                <img class="check-icon" src="{{ asset('assets/website-images/red-check.svg') }}" alt="image">
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
        <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
        <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
    </div>
</div>
@else
<div class="text-center mt-3">
    @if (Session::has('historyMessage'))
    <h2 class="text-danger">
        {{ Session::get('historyMessage') }}
    </h2>
    @endif
</div>
@endif
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
    $(document).ready(function() {
        $('.topupData_d').click(function() {
            var id = $(this).attr('id');
            var url = 'http://localhost/amin-topup';
                window.location.href = url + '/topup_detail/' + id;
        });
    });
</script>
@endsection