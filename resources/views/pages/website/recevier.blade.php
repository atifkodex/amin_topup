@extends('layouts.website.default')
<link rel="stylesheet" href="{{ asset('assets/css/slick.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/slick-theme.css') }}">
<style>
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
            / z-index: -1;/ display: block;
        }

        .right-polygon-orange {
            position: absolute;
            top: 8px;
            right: 16px;
            width: 8%;
            / z-index: -1;/ display: block;
        }

    }

    .amount-section {
        background: #F0F7FF;
        border-radius: 16px;
    }

    .inner-wrapper {
        position: relative;
    }

    @media screen and (min-width:768px) {

        .inner-wrapper-main {
            padding-bottom: 80px !important;
        }

        .form-heading h1 {
            font-size: 30px !important;
            color: white
        }

    }

    .form-heading h1 {
        font-size: 25px;
        color: white
    }

    @media screen and (min-width:1396px) {
        .rec-section {
            margin-bottom: 300px !important;
        }
    }

    @media screen and (min-width:768px)and (max-width:1397px) {
        .rec-section {
            margin-bottom: 35% !important;
        }
    }

    .reg-box {
        background: linear-gradient(73.58deg, #04376D 1.64%, #2762A1 88.81%) !important;
        border-radius: 16px;
    }

    .reg-box p {
        color: white !important;
    }

    .reg-box p a {
        background: transparent !important;
        box-shadow: none !important;
        border: none !important;
    }

    .right-inner {
        position: relative;

    }

    .right-inner img {
        position: absolute;
        right: 0px;
        padding: 12px 12px;
        width: 50px;
        z-index: 999;
        top: 5px;
    }

    .btnStyle_s {
        text-decoration: none !important;
        background-color: #F89822 !important;
        color: black !important;
        width: 100% !important;
        padding: 10px 0px !important;
        font-size: 26px !important;
        font-weight: bold !important;
    }
</style>
@section('content')
@include('includes.website.navbar')
<!-- <div class="container-fluid  px-0 outer-wrapper">
    <div class="inner-wrapper inner-wrapper-main">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
<div class="detail-box-outer pt-5  px-3 ">
    <div class="detail-box amount-box">
        <div class="main-form-section-content pb-4">
            <h1>Your <span>Details</span></h1>
        </div>
        <div class="network-list mb-1 d-flex align-items-center pb-3">
            <div class="network-icon">
                <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}" alt="image">
            </div>
            <div class="network-text d-flex">
                <h1>{{$number}}</h1>

            </div>
            <div class="network-button pl-2 pl-lg-5">
                <button data-toggle="modal" data-target="#email-modal"><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}" alt="image"></button>
            </div>

        </div>
        <div class="network-list mb-1 d-flex align-items-center pb-3">
            <div class="network-icon">
                <img class="network-icon-image" src="{{$data->operator_image}}" alt="image">
            </div>
            <div class="network-text d-flex">
                <h1>{{$data->operator_name}}</h1>

            </div>
        </div>



    </div>

</div>


<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#ffffff" fill-opacity="1" d="M0,32L48,58.7C96,85,192,139,288,176C384,213,480,235,576,202.7C672,171,768,85,864,85.3C960,85,1056,171,1152,197.3C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
    </path>
</svg>

</div>
<img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
<img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
</div> 
<svg style="visibility: hidden; position: absolute;" width="0" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1">
    <defs>
        <filter id="goo">
            <feGaussianBlur in="SourceGraphic" stdDeviation="8" result="blur" />
            <feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 39 -9" result="goo" />
            <feComposite in="SourceGraphic" in2="goo" operator="atop" />
        </filter>
    </defs>
</svg>
<div class="info-section-two container-fluid px-0 ">
    <div class="amount-section container">
        <div class="row">
            <div class="col-12">
                <div class="reg-box mb-4 mb-lg-5">
                    <form class="pt-2" action="{{route('amountDetails')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-heading pt-1 pb-2  pb-md-4 pt-md-2">
                            <h1 class="text-left">Add Recevier Detail</h1>
                        </div>
                        <div class="form-group form-field right-inner">
                            <img src="{{ asset('assets/website-images/person-icon.svg') }}" alt="icon">
                            <input type="text" class="form-control" id="receiverName_d" placeholder="enter recevier name">
                        </div>
                        <div class="form-group form-field right-inner">
                            <img src="{{ asset('assets/website-images/message-icon.svg') }}">
                            <input type="email" class="form-control" id="receiverEmail_d" name="email" placeholder="enter receiver email">
                        </div>
                        <input type="hidden" name="number" value="{{$number}}">
                        <button href="javascript:void(0)" style="background-color:#F89822; color: black" type="submit" class="btn w-100 my-3 my-lg-4 continueReceiverDetailBtn_d">Continue</button>
                    </form>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">
                <h1>Your <span>Details</span> </h1>
                <form class="py-2 py-sm-4" method="POST" action="{{route('number-detail')}}">
                    @csrf
                    <div class="form-group form-field right-inner">
                        <input type="text" class="form-control" aria-describedby="emailHelp" name="number" value="93 70 00 00 000" placeholder="Type here">
                    </div>
                    <button type="submit" class="updateNumModal">Update</button>
                </form>
            </div>
        </div>
    </div>
</div> -->
<div class="container-fluid outer-wrapper">
    <div class="inner-wrapper">
        <img class="star-icon" src="{{ asset('assets/website-images/star-icon.svg') }}" alt="image">
        <div class="inner-wrapper-heading container">
            <h1>Your</h1>
            <h1>Details</h1>
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
<div class="info-section-two container-fluid px-0 ">
    <div class="amount-section container mb-5">
        <div class="pt-5">
            <div class="detail-box amount-box my-3">

                <div class="network-list mb-1 d-flex align-items-center justify-content-between pb-3">
                    <div class="network-icon network-item text-left">
                        <img class="network-icon-image" src="{{ asset('assets/website-images/afg-flag.svg') }}" alt="image">
                    </div>
                    <div class="network-text network-item amin-gmail">
                        <h1>{{$number}}</h1>

                    </div>
                    <div class="network-button network-item text-right">
                        <button data-toggle="modal" data-target="#email-modal"><img class="edit-icon" src="{{ asset('assets/website-images/edit-icon.svg') }}" alt="image"></button>
                    </div>

                </div>
                <div class="network-list mb-1 d-flex align-items-center pb-3 justify-content-between">
                    <div class="network-icon network-item text-left">
                        <img class="network-icon-image" src="{{$data->operator_image}}" alt="image">
                    </div>
                    <div class="network-text network-item amin-gmail">
                        <h1>{{$data->operator_name}}</h1>
                    </div>
                    <div class="network-button network-item invisible text-right">

                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="reg-box mb-4 mb-lg-5">
                    <form class="pt-2" action="{{route('amountDetails')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group form-heading pt-1 pb-2  pb-md-4 pt-md-2">
                            <h1 class="text-left">Add Recevier Detail</h1>
                        </div>
                        <div class="form-group form-field right-inner">
                            <img src="{{ asset('assets/website-images/person-icon.svg') }}" alt="icon">
                            <input type="text" class="form-control" id="receiverName_d" placeholder="enter recevier name">
                        </div>
                        <div class="form-group form-field right-inner">
                            <img src="{{ asset('assets/website-images/message-icon.svg') }}">
                            <input type="email" class="form-control" id="receiverEmail_d" name="email" placeholder="enter receiver email">
                        </div>
                        <input type="hidden" name="number" value="{{$number}}">
                        <button href="javascript:void(0)"  type="submit" class="btnStyle_s btn w-100 my-3 my-lg-4 continueReceiverDetailBtn_d">Continue</button>
                    </form>
                    </p>
                </div>
            </div>
        </div>
        <img class="left-polygon-blue" src="{{ asset('assets/website-images/left-polygon-blue.svg') }}" alt="image">
        <img class="right-polygon-orange" src="{{ asset('assets/website-images/right-polygon-orange.svg') }}" alt="image">
        <img class="lefts-polygon-two" src="{{ asset('assets/website-images/left-polygon-three.svg') }}" alt="image">
        <img class="rights-polygon-two" src="{{ asset('assets/website-images/right-polygon-two.svg') }}" alt="image">
    </div>
</div>
<div class="modal fade" id="email-modal" tabindex="-1" role="dialog" aria-labelledby="basicModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content email-modal-content">
            <div class="modal-body email-modal-body  text-center py-sm-3">
                <h1>Your <span>Details</span> </h1>

                <form class="py-2 py-sm-4">
                    <div class="form-group form-field right-inner">

                        <input type="text" class="form-control" aria-describedby="emailHelp" value="93 70 00 00 000" placeholder="Type here">
                    </div>
                    <a href="#" class="btn mt-sm-3 email-modal-btn">Update</a>
                </form>
            </div>
        </div>
    </div>
</div>
@include('includes.website.footer-navbar')
@endsection
@section('insertjavascript')
<script>
    $(document).ready(function() {
        $(".continueReceiverDetailBtn_d").click(function() {
            $receiverName = $('#receiverName_d').val();
            $receiverEmail = $('#receiverEmail_d').val();
            localStorage.setItem('receiverName', $receiverName);
            localStorage.setItem('receiverEmail', $receiverEmail);
        });
    });
</script>
@endsection