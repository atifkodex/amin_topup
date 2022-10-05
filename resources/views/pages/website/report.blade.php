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
    
        .order-summary-list{
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
            <div class="report-top-heading container">
                <div class="row justify-content-md-center pt-3">
                    <div class="col-2 col-md-3 col-lg-2 report-top">
                        <p>All</p>
                    </div>
                    <div class="col-5 col-md-3 col-lg-2 report-top">
                        <p>Success Top-up</p>
                    </div>
                    <div class="col-5 col-md-3 col-lg-2 report-top">
                        <p>Cancel Top-up</p>
                    </div>
                </div>
            </div>
            <div class="inner-wrapper-heading d-flex justify-content-between">
                <div class="report-header-left">
                    <h1>TopUp</h1>
                    <h1>Report</h1>
                </div>
                <div class="report-header-right">
                    <h1>Total TopUp</h1>
                    <h1>205.56</h1>
                    <h1>AFN</h1>
                </div>

            </div>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
        </div>

    </div>
    <div class="info-section-two container-fluid px-0 my-0 my-md-2">
        <div class="amount-section container-fluid">
            <div class="row">
                <div class="col-12 report-card-wrapper">
                    <div class="reg-box my-0 my-lg-5 px-0">
                        <div class="order-summary-content ">
                            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3">
                                <div class="order-summary-list-left d-flex align-items-center">
                                    <div class="report-profile">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                    </div>
                                   
                                    <div class="report-list pl-3">
                                        <h1>Ahmad</h1>
                                        <h1>93 70 00 00 000</h1>
                                        <h1>August 10,2022 at 10:18 am</h1>
                                    </div>
                                </div>
                                <div class="order-summary-list-right text-center report-right">
                                    <p>200 ANF</p>
                                    <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3">
                                <div class="order-summary-list-left d-flex align-items-center">
                                    <div class="report-profile">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                    </div>
                                   
                                    <div class="report-list pl-3">
                                        <h1>Ahmad</h1>
                                        <h1>93 70 00 00 000</h1>
                                        <h1>August 10,2022 at 10:18 am</h1>
                                    </div>
                                </div>
                                <div class="order-summary-list-right text-center report-right">
                                    <p>200 ANF</p>
                                    <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3">
                                <div class="order-summary-list-left d-flex align-items-center">
                                    <div class="report-profile">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                    </div>
                                   
                                    <div class="report-list pl-3">
                                        <h1>Ahmad</h1>
                                        <h1>93 70 00 00 000</h1>
                                        <h1>August 10,2022 at 10:18 am</h1>
                                    </div>
                                </div>
                                <div class="order-summary-list-right text-center report-right">
                                    <p>200 ANF</p>
                                    <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3">
                                <div class="order-summary-list-left d-flex align-items-center">
                                    <div class="report-profile">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                    </div>
                                   
                                    <div class="report-list pl-3">
                                        <h1>Ahmad</h1>
                                        <h1>93 70 00 00 000</h1>
                                        <h1>August 10,2022 at 10:18 am</h1>
                                    </div>
                                </div>
                                <div class="order-summary-list-right text-center report-right">
                                    <p>200 ANF</p>
                                    <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3">
                                <div class="order-summary-list-left d-flex align-items-center">
                                    <div class="report-profile">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                    </div>
                                   
                                    <div class="report-list pl-3">
                                        <h1>Ahmad</h1>
                                        <h1>93 70 00 00 000</h1>
                                        <h1>August 10,2022 at 10:18 am</h1>
                                    </div>
                                </div>
                                <div class="order-summary-list-right text-center report-right">
                                    <p>200 ANF</p>
                                    <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3">
                                <div class="order-summary-list-left d-flex align-items-center">
                                    <div class="report-profile">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                    </div>
                                   
                                    <div class="report-list pl-3">
                                        <h1>Ahmad</h1>
                                        <h1>93 70 00 00 000</h1>
                                        <h1>August 10,2022 at 10:18 am</h1>
                                    </div>
                                </div>
                                <div class="order-summary-list-right text-center report-right">
                                    <p>200 ANF</p>
                                    <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3">
                                <div class="order-summary-list-left d-flex align-items-center">
                                    <div class="report-profile">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                    </div>
                                   
                                    <div class="report-list pl-3">
                                        <h1>Ahmad</h1>
                                        <h1>93 70 00 00 000</h1>
                                        <h1>August 10,2022 at 10:18 am</h1>
                                    </div>
                                </div>
                                <div class="order-summary-list-right text-center report-right">
                                    <p>200 ANF</p>
                                    <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                </div>
                            </div>
                            <div class="order-summary-list order-summary-list-box my-2 my-md-3 py-2 py-md-3 px-2 px-md-3">
                                <div class="order-summary-list-left d-flex align-items-center">
                                    <div class="report-profile">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <img class="afg-icon" src="{{ asset('assets/website-images/afg-icon.svg') }}" alt="image">
                                    </div>
                                   
                                    <div class="report-list pl-3">
                                        <h1>Ahmad</h1>
                                        <h1>93 70 00 00 000</h1>
                                        <h1>August 10,2022 at 10:18 am</h1>
                                    </div>
                                </div>
                                <div class="order-summary-list-right text-center report-right">
                                    <p>200 ANF</p>
                                    <img class="check-icon" src="{{ asset('assets/website-images/green-check.svg') }}" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
            <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}"
                alt="image">
            <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
            <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
        </div>
    </div>
    <div class="info-section-two container-fluid px-0 ">
        <div class="info-section-two-wrapper  container-fluid ">
            <div class="row py-3">
                <div class="col-md-7 info-section-two-right d-flex justify-content-end order-2 order-md-12">
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
                    <img class="mobile-image-left" src="{{ asset('assets/website-images/person-animated.svg') }}"
                        alt="image">
                </div>

            </div>
        </div>
        <img class="left-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
    </div>
    @include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
@endsection
