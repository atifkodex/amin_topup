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
 
      .banner-content-button a{
        text-decoration: none !important;
      }
      .button-inner span:nth-of-type(2){
        font-weight: bold;
      }
      .banner-content-button a button{
        border: 1px solid white;
        background-color: black;
        color: white;
        border-radius: 10px;
        height: 70px;
        width: 180px;
        display: flex;
        justify-content:space-around;
        padding-top:5px;
        padding-bottom: 5px;
      }
      .banner-content-button a button:hover{
          box-shadow: 0 0 5px 0 #F89822 inset, 0 0 10px 2px #F89822;
          border: 3px solid #F89822;
        }
      @media screen and (max-width:576px) {
        .banner-content-button{
          /* padding-top: 20px;
          padding-bottom: 20px; */
        }
        .banner-content-button a button {
          border: 1px solid white;
          background-color: black;
          color: white;
          border-radius: 10px;
          height: 50px !important;
          width: 140px !important;
          display: flex;
          justify-content: space-around;
          padding-top: 5px;
          font-size: 12px;
          padding-bottom: 5px;
      }
      .banner-content-button a button img{
        width: 30px;
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
                    <p>99% of mobile recharges sent online with Amin Top-Up arrive in under 5 seconds</p>
                </div>
                <form class="" method="POST" action="{{route('number-detail')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group left-inner-addon">
                        <img src="{{ asset('assets/website-images/flag.svg') }}" alt="icon">
                        <div class="phone-extension">+93</div>
                        <input type="text" name="number" class="form-control" placeholder="" value="">
                    </div>
                    <button type="submit" class="btn form-control">Start Top-up</button>
                </form>
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
                <div class="banner-content-button d-flex justify-content-center justify-content-lg-start ">
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
     
        <div class="supported-section px-5 pt-0 pt-md-3 ">
            <div class="supported-section-inner">
                <div class="network-slider-section container-fluid">
                    <h1>Our Telecom</h1>
                    <h1>Partners</h1>
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
                    <p>Every day around 100,000 people worldwide use Amin Topup service to send Topup.Our service is secure and fast with the best rates in the market.</p>
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
                <div class="gallery-section-wrapper gallery-wrapper container ">
                    <div class="row py-3">
                        <div class="col-md-5 gallery-section-left  text-center py-4">
                            <img class="gallery-image-left" src="{{ asset('assets/website-images/person-image.svg') }}"
                            alt="image">
                        </div>
                        <div class="col-md-7 gallery-section-right ">
                            <div class="gallery-section-right-content">
                                <h1>Trusted by over</h1>
                                <p>We have delivered millions of International Mobile Recharge since 2020.</p>
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
        <div class="info-section-two-wrapper  container">
            <div class="row py-3">
                <div class="col-md-5 info-section-two-left text-center py-1 py-md-4">
                    <img class="mobile-image-left" src="{{ asset('assets/website-images/mobile.svg') }}"
                    alt="image">
                </div>
                <div class="col-md-7 info-section-two-right ">
                    <div class="info-section-two-right-content">
                        <h1>How fast will my Topup get to <span>Afghanistan</span>?</h1>
                        <p>Amin Topup has direct routes with all Afghanistan operators. We deliver your Topup within seconds. 99% of our Topups reach customers under 5 seconds.</p>
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
        <div class="info-section-two-wrapper  container">
            <div class="row py-3">
                <div class="col-md-7 info-section-two-right justify-content-end order-2 order-md-12">
                    <div class="info-section-two-right-content pl-md-5">
                        <h1>What Payment Methods are acceptable in <span>Amin Topup</span>?</h1>
                        <p>Amin Topup uses a secure third-party payment processing gateway. We will not save or deal with your payment information. Major credit cards are acceptable in Amin Topup.</p>
                        {{-- <div class=" banner-content-button d-flex justify-content-center justify-content-md-start">
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
                          
                        </div> --}}
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
