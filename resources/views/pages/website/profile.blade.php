@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
       .right-inner {
        position: relative;
    
    }
    .right-inner  img{
          position: absolute;
          right: 0px;
          padding: 12px 12px;
          width: 50px;
          height: 50px;
          z-index: 999;
          top: 25px;
        }
        .form-field label:first-of-type {
        color: #3F4765 !important;
        font-size: 16px !important;
        font-weight: 500;
        margin-bottom: 0px
    }
    .number-bottom-label{
        color: #3F4765 !important;
        font-size: 10px !important;
        font-weight: normal !important;
    }
        @media screen and (max-width:576px) {
    
    .right-inner  img{
      position: absolute;
      right: 0px;
      padding: 12px 12px;
      width: 45px;
      height: 45px;
      z-index: 999;
      top: 23px;
    }
    .form-field label:first-of-type {
        color: #3F4765 !important;
        font-size: 14px !important;
        font-weight: 500;
        margin-bottom: 0px
    }
}
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

    .form-field textarea {
        resize: none;
        border: 1px solid #CDCCCE;
        border-radius: 5px;
        height: 250px !important;
    }

    @media screen and (max-width:767px) {
        .form-field textarea {
            height: 200px !important;
        }

        .contact-form-heading h1 {
            color: #F89822;
            font-size: 30px !important;
            font-weight: bold;
        }
    }

    @media screen and (max-width:576px) {
        .form-field textarea {
            height: 120px !important;
        }

        .contact-form-heading h1 {
            color: #F89822;
            font-size: 25px !important;
            font-weight: bold;
        }

    }

 

    .form-field textarea:active,
    .form-field textarea:focus {
        resize: none;
        outline: none;
        box-shadow: none;
        border: none
    }

    .contact-form-heading p {
        text-align: left !important;
        color: black !important;
        font-size: 14px !important;
        width: 100% !important;
        font-size: 18px;
    }

    .contact-form-heading h1 {
        color: #F89822;
        font-size: 40px;
        font-weight: bold;
    }

    .contact-btn {
        width: 50% !important;
    }
    .form-field input{
        padding: 0px !important;
        height: 40px !important;
        padding-right: 50px !important;
    }
    @media screen and (max-width:576px) {
        .contact-btn {
            width: 100% !important;
        }
        .form-field input{
        
        height: 30px !important
    }
    }
    .form-field{
        background:white;
        border-radius: 5px;
        padding: 5px 10px;
    }

   
</style>
@section('content')
    @include('includes.website.navbar')
    <div class="container-fluid outer-wrapper">
        <div class="inner-wrapper">
            <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
            <div class="inner-wrapper-heading d-flex">
                <h1>Profil</h1>
                <h1 class="">e</h1>
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
                    <div class="reg-box my-0 my-md-5">
                        <form class="pt-2 pt-md-3">
                            <div class="row">
                                <div class="col-12 pb-4">
                                    <div class="profile-image-section text-center py-4">
                                        <img class="profile-img" src="{{ asset('assets/website-images/profile-image.jpg') }}" alt="image">
                                        <h1 class="py-2">Amin Top-up</h1>
                                        <div class="form-group form-field">
                                            <input type="file" name="file" id="file-input" class="visuallyhidden">
                                            <button class="file-upload">Change Picture</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 py-2">
                                    <div class="form-group form-field right-inner">
                                        <label for="name">Birthday</label>
                                        <img src="{{ asset('assets/website-images/Edit.svg') }}" alt="icon">
                                        <input type="text" class="form-control" value="05/10/2022" placeholder="Type here">
                                    </div>
                                </div>
                                <div class="col-md-6 py-2">
                                    <div class="form-group form-field right-inner">
                                        <label for="email">Email</label>
                                        <img src="{{ asset('assets/website-images/Edit.svg') }}" alt="icon">
                                        <input type="email" class="form-control" value="amintopup@gmail.com" placeholder="Type here">
                                    </div>
                                </div>
                                <div class="col-md-6 py-2">
                                    <div class="form-group form-field right-inner">
                                        <label for="number">Phone Number</label>
                                        <img src="{{ asset('assets/website-images/phone.svg') }}" alt="icon">
                                        <input type="text" class="form-control" value="93 70 00 00 000" placeholder="Type here">
                                        <label class="number-bottom-label">set topup easily</label>
                                    </div>
                                </div>
                                <div class="col-md-6 py-2">
                                    <div class="form-group form-field right-inner">
                                        <label for="country">Country</label>
                                        <img src="{{ asset('assets/website-images/Edit.svg') }}" alt="icon">
                                        <input type="text" class="form-control" value="Afghanistan" placeholder="Type here">
                                    </div>
                                </div>
                                <div class="col-12 py-2 pb-2 pb-md-5 text-center">
                                    <a href="" type="submit"
                                        class="btn my-3 my-lg-4 summary-btn contact-btn">Update</a>
                                </div>
                            </div>
                        </form>


                    </div>
                </div>
            </div>
            <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
            <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}"
                alt="image">
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
<script>
    $('.file-upload').on('click', function(e) {
  e.preventDefault();
  $('#file-input').trigger('click');
});
</script>
@endsection
