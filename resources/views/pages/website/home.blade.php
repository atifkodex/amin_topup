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
    .hero-section{
        padding-bottom:300px !important;
    }

    }
    @media screen and (min-width:1950px){
    .left-polygon-blue{
        position: absolute;
        top:40% !important;
        left: -2% !important;
        width:8%;
        /* z-index: -1; */
        display: block;
    }
    .right-polygon-orange{
        position: absolute;
        top:60%;
        right: 0px;
        width: 8%;
        /* z-index: -1; */
        display: block;
    }


    }
    @media screen and (min-width:2450px){
    .left-polygon-blue{
        position: absolute;
        top:40% !important;
        left: -2% !important;
        width:200px;
        /* z-index: -1; */
        display: block;
    }
    .right-polygon-orange{
        position: absolute;
        top:60%;
        right: 0px;
        width:200px;
        /* z-index: -1; */
        display: block;
    }


    }
    @media screen and (max-width:767px){
        .hero-form-section{
        padding-bottom: 150px !important;
    }
    }
    @media screen and (max-width:556px){
        .hero-form-section{
        padding-bottom: 100px !important;
    }
    }
  
</style>
@section('content')
    @include('includes.website.navbar')
    <div class="container-fluid  px-0 outer-wrapper">
        <div class="inner-wrapper inner-wrapper-main hero-section ">
            <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
            <div class="hero-form-section container pt-5 main-content">
                <div class="hero-form-section-content">
                    <h1>The fastest way to send <span>Top-up</span> worldwide</h1>
                    <p>99% of mobile recharges sent online with Amin Top-Up arrive in under 30 seconds</p>
                </div>
                <form class="">
                    <div class="form-group left-inner-addon">
                        <img src="{{ asset('assets/website-images/flag.svg') }}" alt="icon">
                        <div class="phone-extension">+93</div>
                        <input type="text" class="form-control" placeholder="" value="">
                    </div>
                    <button type="submit" class="btn form-control">Start Top-up</button>
                </form>
            </div>
            
            {{-- <div class="detail-box-outer pt-5  px-3">
                <div class="detail-box">
                    <div class="main-form-section-content pb-4">
                        <h1>The fastest way to send <span>Top-up</span> worldwide</h1>
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
                 <div class="detail-box-bottom text-right">
                    <h1>250 <span>AFN</span></h1>
                 </div>
            </div> --}}
       
            
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#ffffff" fill-opacity="1"
                    d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
                </path>
            </svg>
            
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
    </div>
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
              <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />    
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 39 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
              </filter>
          </defs>
      </svg>

 

    <div class="container-fluid service-section pb-0  mb-0">
        <div class="row">
            <div class="service-heading  col-lg-3 col-xl-4">
                <h1>Why Choose Us</h1>
                <img class="service-left-img" src="{{ asset('assets/website-images/left-yellow.svg') }}" alt="image">
            </div>
            <div class="service-list col-lg-9 col-xl-8">
                <div class="service-inner-list pt-0 pt-xl-5">
                    <div class="service-card">
                        <img class="service-icon" src="{{ asset('assets/website-images/clock-icon.svg') }}" alt="image">
                        <div class="service-card-content">
                            <p>Fast</p>
                            <p>Top-Up</p>
                        </div>
                    </div>
                    <div class="service-card">
                        <img class="service-icon" src="{{ asset('assets/website-images/safety-icon.svg') }}" alt="image">
                        <div class="service-card-content">
                            <p>Safety</p>
                            <p>Top-Up</p>
                        </div>
                    </div>
                    <div class="service-card">
                        <img class="service-icon" src="{{ asset('assets/website-images/satisfied-icon.svg') }}" alt="image">
                        <div class="service-card-content">
                            <p>Satisfied</p>
                            <p>Top-Up</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     
        <div class="supported-section px-5 pt-0 pt-md-3 ">
            <div class="supported-section-inner">
                <div class="network-slider-section container-fluid">
                    <h1>Supported payment</h1>
                    <h1>methods</h1>
                    <div class="network-slider">
                        <div class="row">
                            <div class="col-md-6 network-slider-left">
                                <div class="row slider slider-bg">
                                    <div class="col-md-12 ">
                                        <div class="py-2 d-flex justify-content-center">
                                            <img class="slide-image" src="{{ asset('assets/website-images/awcc.svg') }}"
                                                alt="image">
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="  py-2 d-flex justify-content-center">
                                            <img class="slide-image" src="{{ asset('assets/website-images/roshan.svg') }}"
                                                alt="image">
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="  py-2 d-flex justify-content-center">
                                            <img class="slide-image"
                                                src="{{ asset('assets/website-images/etisalat.svg') }}" alt="image">
                                        </div>

                                    </div>

                                    <div class="col-md-12">
                                        <div class="  py-2 d-flex justify-content-center">
                                            <img class="slide-image"
                                                src="{{ asset('assets/website-images/afghan-telecom.svg') }}"
                                                alt="image">
                                        </div>

                                    </div>
                                    <div class="col-md-12">
                                        <div class="  py-2 d-flex justify-content-center">
                                            <img class="slide-image" src="{{ asset('assets/website-images/awcc.svg') }}"
                                                alt="image">
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 network-slider-right">
                                <div class="network-slider-right-section">
                                    <img class="global-image" src="{{ asset('assets/website-images/global.svg') }}"
                                        alt="image">
                                </div>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid info-section ">
        <div class="row">
            <div class="col-md-7 info-section-left py-2 py-lg-5">
                <div class="info-section-left-content">
                    <h1>Safe, Fast,</h1>
                    <p>Every month around 300,000 people send over 10 million dollars of top-up with Amin. That's thousands of title smiles sent - every single day.</p>
                </div>
            </div>
            <div class="col-md-5 info-section-right pr-0 text-right py-5">
                <img class="info-right-image" src="{{ asset('assets/website-images/info-right-two.svg') }}"
                alt="image">
            </div>
        </div>
       
    </div>
    <div class="gallery-section container-fluid px-0">
        <img class="gallery-image" src="{{ asset('assets/website-images/gallery-bg.svg') }}"
                alt="image">
                <div class="gallery-section-wrapper gallery-wrapper container-fluid ">
                    <div class="row py-3">
                        <div class="col-md-5 gallery-section-left  text-center py-4">
                            <img class="gallery-image-left" src="{{ asset('assets/website-images/person-image.svg') }}"
                            alt="image">
                        </div>
                        <div class="col-md-7 gallery-section-right ">
                            <div class="gallery-section-right-content">
                                <h1>Trusted by over</h1>
                                <p>Whether you call it top-up, recharge, load, airtime or credit, we've got you covered. We've delivered over 500 million international mobile recharges since 2022.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <img class="gallery-image-top" src="{{ asset('assets/website-images/person-image.svg') }}"
                alt="image">
                <img class="gallery-image-bottom" src="{{ asset('assets/website-images/person-image.svg') }}"
                alt="image">
    </div>
    <div class="info-section-two container-fluid px-0 ">
        <div class="info-section-two-wrapper  container-fluid ">
            <div class="row py-3">
                <div class="col-md-5 info-section-two-left text-center py-1 py-md-4">
                    <img class="mobile-image-left" src="{{ asset('assets/website-images/mobile.svg') }}"
                    alt="image">
                </div>
                <div class="col-md-7 info-section-two-right ">
                    <div class="info-section-two-right-content">
                        <h1>How fast will my money get to </h1>
                        <p>Choose cash pickup and your money is typically available in minutes at convenient locations throughout Afghanistan.</p>
                    </div>
                </div>
            </div>
        </div>
        <img class="left-polygon-two" src="{{ asset('assets/website-images/left-polygon-two.svg') }}"
        alt="image">
        <img class="right-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}"
        alt="image">
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
    <script src="{{ asset('assets/js/slick.js') }}"></script>
    <script>
        $('.slider').slick({
            dots: false,
            arrows: false,
            infinite: true,
              autoplay: true,
            speed: 300,
            slidesToShow: 4,
            slidesToScroll: 4,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    </script>
@endsection
