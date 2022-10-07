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
    .inner-wrapper-main{
        padding-bottom: 80px !important;
    }
    .form-heading h1{
        font-size: 30px !important;
        color: white
    }

    }
    .form-heading h1{
        font-size: 25px;
        color: white
    }
      @media screen and (min-width:1396px){
  .rec-section{
    margin-bottom:300px !important;
  }
   }
  @media screen and (min-width:768px)and (max-width:1397px){
    .rec-section{
      margin-bottom:35% !important;
    }
  }
  .reg-box {
        background: linear-gradient(73.58deg, #04376D 1.64%, #2762A1 88.81%) !important;
        border-radius: 16px;
    }
    .reg-box p{
        color: white !important;
    }
    .reg-box p a{
        background: transparent !important;
        box-shadow: none !important;
        border: none !important;
    }
 
    .right-inner {
        position: relative;
    
    }
    .right-inner  img{
          position: absolute;
          right: 0px;
          padding: 12px 12px;
          width: 50px;
          z-index: 999;
          top: 5px;
        }

</style>
@section('content')
    @include('includes.website.navbar')
    <div class="container-fluid  px-0 outer-wrapper">
        <div class="inner-wrapper inner-wrapper-main">
            <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
            <div class="detail-box-outer pt-5  px-3 ">
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
                            <button data-toggle="modal" data-target="#email-modal"><img class="edit-icon"  src="{{ asset('assets/website-images/edit-icon.svg') }}"
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
    <svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
        <defs>
              <filter id="goo"><feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />    
                  <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 39 -9" result="goo" />
                  <feComposite in="SourceGraphic" in2="goo" operator="atop"/>
              </filter>
          </defs>
      </svg>
      <div class="info-section-two container-fluid px-0 ">
        <div class="amount-section container">
            <div class="row">
                <div class="col-12">
                    <div class="reg-box mb-4 mb-lg-5">
                        <form class="pt-2">
                            <div class="form-group form-heading pt-1 pb-2  pb-md-4 pt-md-2">
                                <h1 class="text-left">Add Recevier Detail</h1>
                             </div>
                            <div class="form-group form-field right-inner">
                                <img src="{{ asset('assets/website-images/person-icon.svg') }}" alt="icon">
                              <input type="text" class="form-control"  placeholder="enter recevier name">
                            </div>
                            <div class="form-group form-field right-inner">
                                <img src="{{ asset('assets/website-images/message-icon.svg') }}" >
                              <input type="email" class="form-control"  name="email" placeholder="enter receiver email">
                            </div>
                            <a href=""  class="btn my-3 my-lg-4">LOG IN</a>
                          </form>
                        <p class="py-3">Don't have account?<a href="{{url('signup')}}"><span>Sign Up</span></a> 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content email-modal-content">
                <div class="modal-body email-modal-body  text-center py-sm-3">
                    <h1>Your <span>Details</span> </h1>
             
                    <form class="py-2 py-sm-4">
                        <div class="form-group form-field right-inner">

                            <input type="text" class="form-control" 
                                aria-describedby="emailHelp" value="93 70 00 00 000" placeholder="Type here">
                        </div>
                        <a href="#" class="btn mt-sm-3 email-modal-btn" >Update</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
   
    @include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
@endsection
