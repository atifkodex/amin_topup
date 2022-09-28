@extends('layouts.website.default')
<link rel="stylesheet" href="{{asset('assets/css/slick.css')}}">
<link rel="stylesheet" href="{{asset('assets/css/slick-theme.css')}}">
@section('content')
@include('includes.website.navbar')
<div class="container-fluid hero-section">
    <img class="hero-image" src="{{asset('assets/website-images/hero.svg')}}" alt="image">
    <div class="hero-form-section centered">
        <form>
            <div class="form-group left-inner-addon">
                <img src="{{asset('assets/website-images/flag.svg')}}" alt="icon">
                <div class="phone-extension">+93</div>
               <input type="text" class="form-control"  placeholder="" value="">
            </div>
            <button type="submit" class="btn form-control">Start Top-up</button>
          </form>
    </div>
</div>
<div class="container-fluid service-section pb-5">
    <img class="service-section-bg" src="{{asset('assets/website-images/service-bg.svg')}}" alt="image">
    <div class="service-heading">
        <h1>Why Choose Us</h1>
    </div>
    <div class="service-list">
       <div class="service-inner-list">
            <div class="service-card">
                <img class="service-icon" src="{{asset('assets/website-images/clock-icon.svg')}}" alt="image">
                <div class="service-card-content">
                    <p>Fast</p>
                    <p>Top-Up</p>
                </div>
            </div>
            <div class="service-card">
                <img class="service-icon" src="{{asset('assets/website-images/safety-icon.svg')}}" alt="image">
                <div class="service-card-content">
                    <p>Safety</p>
                    <p>Top-Up</p>
                </div>
            </div>
            <div class="service-card">
                <img class="service-icon" src="{{asset('assets/website-images/satisfied-icon.svg')}}" alt="image">
                <div class="service-card-content">
                    <p>Satisfied</p>
                    <p>Top-Up</p>
                </div>
            </div>
       </div>
    </div>
    <div class="supported-section px-5">
        <div class="supported-section-inner">
           <div class="network-slider-section">
            <h1>Supported payment</h1>
            <h1>methods</h1>
            <div class="network-slider">
             <div class="row slider bg-info">
                <div class="col-md-12">
                    <div class="bg-primary py-2">
                        <img src="{{asset('assets/website-images/awcc.svg')}}" alt="image">
                    </div>
                    
                </div>
                <div class="col-md-12">
                    <div class="bg-primary py-2">
                        <img src="{{asset('assets/website-images/roshan.svg')}}" alt="image">
                    </div>
                    
                </div>
                <div class="col-md-12">
                    <div class="bg-primary py-2">
                        <img src="{{asset('assets/website-images/etisalat.svg')}}" alt="image">
                    </div>
                   
                </div>
              
                <div class="col-md-12">
                    <div class="bg-primary py-2">
                        <img width="76" height="76" src="{{asset('assets/website-images/afghan-telecom.svg')}}" alt="image">
                    </div>
                   
                </div>
             </div>
            </div>
           </div>
        </div>
    </div>
</div>
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
<script src="{{ asset('assets/js/slick.js') }}"></script>
<script>

$('.slider').slick({
  dots: true,
  infinite: true,
  autoplay: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 1,
  responsive: [
    {
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